<?php
// Carrega as funções reutilizáveis do projeto.
require_once 'includes/funcoes.php';

// Inclui o cabeçalho da página.
include 'includes/header.php';

// Carrega todos os produtos cadastrados no arquivo JSON.
$produtos = carregarJson('data/produtos.json');

// Garante que produtos seja sempre um array.
if(!is_array($produtos)){
    $produtos = [];
}

// Embaralha os produtos para exibir ofertas diferentes na página inicial.
shuffle($produtos);

// Seleciona 15 produtos aleatórios para a seção de ofertas.
$destaques = array_slice($produtos, 0, 15);

// Produtos fixos exibidos na primeira seção de destaque.
$produtosFixos = [
    [
        'id' => 1,
        'nome' => 'Mouse Gamer RGB',
        'preco' => 99.90,
        'imagem' => 'assets/img/mouse.png'
    ],
    [
        'id' => 2,
        'nome' => 'Teclado Mecânico',
        'preco' => 199.90,
        'imagem' => 'assets/img/teclado.png'
    ],
    [
        'id' => 3,
        'nome' => 'Headset Gamer',
        'preco' => 149.90,
        'imagem' => 'assets/img/headset.jpg'
    ],
    [
        'id' => 6,
        'nome' => 'SSD NVMe 1TB',
        'preco' => 399.90,
        'imagem' => 'assets/img/ssd.jpg'
    ],
    [
        'id' => 2,
        'nome' => 'Teclado Mecânico',
        'preco' => 199.90,
        'imagem' => 'assets/img/teclado.png'
    ]
];
?>

<link rel="shortcut icon" href="img/logo.png" type="image/x-icon">

<section class="banner">

```
<div class="banner-conteudo">

    <h2>As melhores ofertas em tecnologia</h2>

    <p>
        Computadores, periféricos, hardware e muito mais.
    </p>

    <a href="produtos.php" class="btn">
        Ver Produtos
    </a>

</div>
```

</section>

<section class="categorias">

```
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
```

</section>

<section class="destaques">

```
<h2>Produtos em Destaque</h2>

<div class="produtos">

    <?php foreach($produtosFixos as $produtoFixo): ?>

        <div class="produto">

            <img
                src="<?php echo protegerTexto($produtoFixo['imagem']); ?>"
                alt="<?php echo protegerTexto($produtoFixo['nome']); ?>"
            >

            <h3>
                <?php echo protegerTexto($produtoFixo['nome']); ?>
            </h3>

            <p>
                <?php echo formatarPreco($produtoFixo['preco']); ?>
            </p>

            <form action="controlles/proc_carrinho.php" method="post">

                <input
                    type="hidden"
                    name="id"
                    value="<?php echo (int) $produtoFixo['id']; ?>"
                >

                <button type="submit" class="btn-carrinho">
                    Adicionar ao Carrinho
                </button>

            </form>

        </div>

    <?php endforeach; ?>

</div>
```

</section>

<section class="destaques ofertas-home">

```
<h2>Ofertas em Destaque</h2>

<div class="produtos">

    <?php foreach($destaques as $produto): ?>

        <div class="produto">

            <img
                src="<?php echo protegerTexto($produto['imagem']); ?>"
                alt="<?php echo protegerTexto($produto['nome']); ?>"
            >

            <span class="tag-oferta">
                Oferta
            </span>

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
```

</section>

<?php include 'includes/footer.php'; ?>
