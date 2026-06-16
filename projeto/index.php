<?php
include 'includes/header.php';

$produtos = json_decode(
    file_get_contents('data/produtos.json'),
    true
);

shuffle($produtos);

$destaques = array_slice($produtos, 0, 15);
?>

<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

<section class="banner">
    <div class="banner-conteudo">
        <h2>As melhores ofertas em tecnologia</h2>
        <p>Computadores, periféricos, hardware e muito mais.</p>
        <a href="produtos.php" class="btn">Ver Produtos</a>
    </div>
</section>

<section class="categorias">
    <h2>Categorias</h2>

    <div class="cards">
        <a href="produtos.php?categoria=Computadores" class="card">
            <h3>Computadores</h3>
        </a>

        <a href="produtos.php?categoria=Notebooks" class="card">
            <h3>Notebooks</h3>
        </a>

        <a href="produtos.php?categoria=Periféricos" class="card">
            <h3>Periféricos</h3>
        </a>

        <a href="produtos.php?categoria=Hardware" class="card">
            <h3>Hardware</h3>
        </a>
    </div>
</section>

<section class="destaques">
    <h2>Produtos em Destaque</h2>

    <div class="produtos">

        <div class="produto">
            <img src="assets/img/mouse.png" alt="Mouse Gamer RGB">
            <h3>Mouse Gamer RGB</h3>
            <p>R$ 99,90</p>

            <form action="controlles/proc_carrinho.php" method="post">
                <input type="hidden" name="id" value="1">

                <button type="submit" class="btn-carrinho">
                    Adicionar ao Carrinho
                </button>
            </form>
        </div>

        <div class="produto">
            <img src="assets/img/teclado.png" alt="Teclado Mecânico">
            <h3>Teclado Mecânico</h3>
            <p>R$ 199,90</p>

            <form action="controlles/proc_carrinho.php" method="post">
                <input type="hidden" name="id" value="2">

                <button type="submit" class="btn-carrinho">
                    Adicionar ao Carrinho
                </button>
            </form>
        </div>

        <div class="produto">
            <img src="assets/img/headset.jpg" alt="Headset Gamer">
            <h3>Headset Gamer</h3>
            <p>R$ 149,90</p>

            <form action="controlles/proc_carrinho.php" method="post">
                <input type="hidden" name="id" value="3">

                <button type="submit" class="btn-carrinho">
                    Adicionar ao Carrinho
                </button>
            </form>
        </div>

        <div class="produto">
            <img src="assets/img/ssd.jpg" alt="SSD NVMe 1TB">
            <h3>SSD NVMe 1TB</h3>
            <p>R$ 399,90</p>

            <form action="controlles/proc_carrinho.php" method="post">
                <input type="hidden" name="id" value="6">

                <button type="submit" class="btn-carrinho">
                    Adicionar ao Carrinho
                </button>
            </form>
        </div>

        <div class="produto">
            <img src="assets/img/teclado.png" alt="Teclado Mecânico">
            <h3>Teclado Mecânico</h3>
            <p>R$ 199,90</p>

            <form action="controlles/proc_carrinho.php" method="post">
                <input type="hidden" name="id" value="2">

                <button type="submit" class="btn-carrinho">
                    Adicionar ao Carrinho
                </button>
            </form>
        </div>

    </div>
</section>

<section class="destaques">

    <h2>Ofertas em Destaque</h2>

    <div class="produtos">

        <?php foreach($destaques as $produto): ?>

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

                <form action="controlles/proc_carrinho.php" method="post">
                    <input
                        type="hidden"
                        name="id"
                        value="<?php echo $produto['id']; ?>"
                    >

                    <button type="submit" class="btn-carrinho">
                        Adicionar ao Carrinho
                    </button>
                </form>

            </div>

        <?php endforeach; ?>

    </div>

</section>

<?php include 'includes/footer.php'; ?>