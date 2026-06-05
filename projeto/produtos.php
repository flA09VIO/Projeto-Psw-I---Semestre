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
?>

<div class="produtos">

<?php foreach($produtos as $produto): ?>

    <?php
        if(
            $busca != '' &&
            stripos($produto['nome'], $busca) === false
        ){
            continue;
        }
    ?>

    <div class="produto">

        <img
            src="<?php echo $produto['imagem']; ?>"
            alt="<?php echo $produto['nome']; ?>"
        >

        <h3><?php echo $produto['nome']; ?></h3>

        <p>
            Categoria:
            <?php echo $produto['categoria']; ?>
        </p>

        <p>
            R$ <?php echo number_format(
                $produto['preco'],
                2,
                ',',
                '.'
            ); ?>
        </p>

    </div>

<?php endforeach; ?>

</div>

<?php include 'includes/footer.php'; ?>