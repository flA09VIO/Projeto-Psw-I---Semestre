<?php
// Carrega as funções reutilizáveis do projeto.
require_once 'includes/funcoes.php';

// Inclui o cabeçalho da página.
include 'includes/header.php';

// Carrega os produtos cadastrados no arquivo JSON.
$produtos = carregarJson('data/produtos.json');

// Garante que a variável produtos seja sempre um array.
if(!is_array($produtos)){
    $produtos = [];
}

// Variável usada para armazenar o texto pesquisado pelo usuário.
$busca = '';

// Verifica se foi enviada alguma busca pela URL.
if(isset($_GET['busca'])){
    $busca = trim($_GET['busca']);
}

// Variável usada para armazenar a categoria selecionada.
$categoria = '';

// Verifica se foi enviada alguma categoria pela URL.
if(isset($_GET['categoria'])){
    $categoria = trim($_GET['categoria']);
}

// Controla se algum produto foi encontrado.
$encontrouProduto = false;
?>

<!-- Área onde os produtos serão exibidos em formato de cards. -->

<div class="produtos">


<!-- Percorre todos os produtos carregados do arquivo JSON. -->
<?php foreach($produtos as $produto): ?>

    <?php
    // Se uma categoria foi escolhida, mostra apenas produtos dessa categoria.
    if(
        $categoria != '' &&
        $produto['categoria'] != $categoria
    ){
        continue;
    }

    // Se uma busca foi feita, mostra apenas produtos com nome correspondente.
    if(
        $busca != '' &&
        stripos($produto['nome'], $busca) === false
    ){
        continue;
    }

    // Se chegou até aqui, significa que o produto será exibido.
    $encontrouProduto = true;
    ?>

    <!-- Card individual de cada produto. -->
    <div class="produto">

        <!-- Imagem do produto. -->
        <img
            src="<?php echo protegerTexto($produto['imagem']); ?>"
            alt="<?php echo protegerTexto($produto['nome']); ?>"
        >

        <!-- Selo de oferta exibido no card. -->
        <span class="tag-oferta">Oferta</span>

        <!-- Nome do produto. -->
        <h3>
            <?php echo protegerTexto($produto['nome']); ?>
        </h3>

        <!-- Exibe o preço antigo apenas se ele existir no JSON. -->
        <?php if(isset($produto['preco_antigo'])): ?>
            <p class="preco-antigo">
                <?php echo formatarPreco($produto['preco_antigo']); ?>
            </p>
        <?php endif; ?>

        <!-- Exibe o preço atual do produto. -->
        <p class="preco-atual">
            <?php echo formatarPreco($produto['preco']); ?>
        </p>

        <!-- Formulário responsável por adicionar o produto ao carrinho. -->
        <form action="controlles/proc_carrinho.php" method="post">

            <!-- Envia o ID do produto para o controle do carrinho. -->
            <input
                type="hidden"
                name="id"
                value="<?php echo (int) $produto['id']; ?>"
            >

            <!-- Botão para adicionar o produto ao carrinho. -->
            <button type="submit" class="btn-carrinho">
                Adicionar ao Carrinho
            </button>

        </form>

    </div>

<?php endforeach; ?>


</div>

<!-- Mensagem exibida caso nenhum produto seja encontrado na busca ou categoria. -->

<?php if(!$encontrouProduto): ?>


<p class="mensagem-vazia">
    Nenhum produto encontrado.
</p>


<?php endif; ?>

<!-- Inclui o rodapé da página. -->

<?php include 'includes/footer.php'; ?>
