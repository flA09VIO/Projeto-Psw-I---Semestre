
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

if(isset($_GET['busca'])){
    $busca = trim($_GET['busca']);
}

// Variável usada para armazenar a categoria selecionada.
$categoria = '';

if(isset($_GET['categoria'])){
    $categoria = trim($_GET['categoria']);
}

// Controla se algum produto foi encontrado.
$encontrouProduto = false;
?>

<div class="produtos">

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

        <div class="produto">

            <img
                src="<?php echo protegerTexto($produto['imagem']); ?>"
                alt="<?php echo protegerTexto($produto['nome']); ?>"
            >

            <span class="tag-oferta">Oferta</span>

            <h3>
                <?php echo protegerTexto($produto['nome']); ?>
            </h3>

            <?php if(isset($produto['preco_antigo'])): ?>
                <p class="preco-antigo">
                    <?php echo formatarPreco($produto['preco_antigo']); ?>
                </p>
            <?php endif; ?>

            <p class="preco-atual">
                <?php echo formatarPreco($produto['preco']); ?>
            </p>

            <form action="controlles/proc_carrinho.php" method="post">

                <input
                    type="hidden"
                    name="id"
                    value="<?php echo (int) $produto['id']; ?>"
                >

                <button type="submit" class="btn-carrinho">
                    Adicionar ao Carrinho
                </button>

            </form>

        </div>

    <?php endforeach; ?>

</div>

<?php if(!$encontrouProduto): ?>

    <p class="mensagem-vazia">
        Nenhum produto encontrado.
    </p>

<?php endif; ?>

<?php include 'includes/footer.php'; ?>
:::

A única coisa que removi foram as crases ``` que tinham entrado no meio do arquivo. O restante está correto.