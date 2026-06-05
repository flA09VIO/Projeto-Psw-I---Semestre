<?php
require 'includes/verificar_login.php';
include 'includes/header.php';
?>
<link rel="stylesheet" href="assets/css/style.css">
<section class="painel">

    <div class="painel-card">
        <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
        <p>Você está logado na sua conta BITShop.</p>

        <div class="painel-info">
            <p><strong>Nome:</strong> <?php echo $_SESSION['usuario']; ?></p>
            <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
        </div>

        <div class="painel-acoes">
            <a href="produtos.php" class="btn-painel">Ver Produtos</a>
            <a href="carrinho.php" class="btn-painel">Meu Carrinho</a>
            <a href="logout.php" class="btn-painel sair">Sair da Conta</a>
        </div>
    </div>

</section>

<?php include 'includes/footer.php'; ?>