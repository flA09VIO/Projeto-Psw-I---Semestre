<?php
// Verifica se o usuário está logado antes de acessar o painel.
require 'includes/verificar_login.php';

// Inclui o cabeçalho da página.
include 'includes/header.php';
?>

<!-- Importa o arquivo CSS principal do projeto. -->

<link rel="stylesheet" href="assets/css/style.css">

<section class="painel">


<!-- Card principal do painel do usuário. -->
<div class="painel-card">

    <!-- Mensagem de boas-vindas com o nome do usuário logado. -->
    <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>

    <!-- Texto informando que o usuário está logado. -->
    <p>Você está logado na sua conta BITShop.</p>

    <!-- Área com as informações do usuário. -->
    <div class="painel-info">

        <!-- Exibe o nome salvo na sessão. -->
        <p><strong>Nome:</strong> <?php echo $_SESSION['usuario']; ?></p>

        <!-- Exibe o email salvo na sessão. -->
        <p><strong>Email:</strong> <?php echo $_SESSION['email']; ?></p>
    </div>

    <!-- Área com os botões de ação do painel. -->
    <div class="painel-acoes">

        <!-- Link para acessar a página de produtos. -->
        <a href="produtos.php" class="btn-painel">Ver Produtos</a>

        <!-- Link para acessar o carrinho do usuário. -->
        <a href="carrinho.php" class="btn-painel">Meu Carrinho</a>

        <!-- Link para sair da conta. -->
        <a href="logout.php" class="btn-painel sair">Sair da Conta</a>
    </div>
</div>


</section>

<?php include 'includes/footer.php'; ?>
