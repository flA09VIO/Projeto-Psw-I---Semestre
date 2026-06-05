<?php
include 'includes/header.php';

$produtos = json_decode(
    file_get_contents('data/produtos.json'),
    true
);

$busca = '';

if(isset($_GET['busca'])){
    $busca = trim($_GET['busca']);
}

$categoria = '';

if(isset($_GET['categoria'])){
    $categoria = trim($_GET['categoria']);
}

$encontrouProduto = false;
?>
<div class="produtos">

<?php foreach($produtos as $produto): ?>

    <?php
        if(
            $categoria != '' &&
            $produto['categoria'] != $categoria
        ){
            continue;
        }

        if(
            $busca != '' &&
            stripos($produto['nome'], $busca) === false
        ){
            continue;
        }

        $encontrouProduto = true;
    ?>

    <div class="produto">

        <img
            src="<?php echo $produto['imagem']; ?>"
            alt="<?php echo $produto['nome']; ?>"
        >

        <span class="tag-oferta">Oferta</span>

        <h3><?php echo $produto['nome']; ?></h3>

        <?php if(isset($produto['preco_antigo'])): ?>
            <p class="preco-antigo">
                R$ <?php echo number_format($produto['preco_antigo'], 2, ',', '.'); ?>
            </p>
        <?php endif; ?>

        <p class="preco-atual">
            R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?>
        </p>

        <button class="btn-carrinho">
            Adicionar ao Carrinho
        </button>

    </div>

<?php endforeach; ?>

</div>