<?php
// Verifica se a sessão ainda não foi iniciada.
if(session_status() === PHP_SESSION_NONE){
    // Inicia a sessão para permitir o uso de $_SESSION no site.
    session_start();
}
?>

<!DOCTYPE html>

<html lang="pt-br">

<head>
    <!-- Define a codificação de caracteres da página. -->
    <meta charset="UTF-8">


<!-- Permite que o site se adapte melhor a celulares e telas menores. -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Título exibido na aba do navegador. -->
<title>BITShop</title>

<!-- Importa o arquivo CSS principal do projeto. -->
<link rel="stylesheet" href="assets/css/style.css"> 


</head>

<body>

<header>


<!-- Área da logo/nome da loja. -->
<div class="logo">
    <a href="index.php">BITShop</a>
</div>

<!-- Barra de pesquisa dos produtos. -->
<div class="barra-pesquisa">
    <form action="produtos.php" method="GET">

        <!-- Campo onde o usuário digita o nome do produto. -->
        <input
            type="text"
            name="busca"
            placeholder="Pesquisar produtos..."
        >

        <!-- Botão para enviar a pesquisa. -->
        <button type="submit">
            🔍
        </button>

    </form>
</div>

<!-- Menu principal de navegação. -->
<nav>
    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="sobre.php">Sobre</a></li>

        <!-- Se o usuário estiver logado, mostra as opções de usuário. -->
        <?php if(isset($_SESSION['usuario'])): ?>

            <li><a href="carrinho.php">Carrinho</a></li>
            <li><a href="painel.php">Painel</a></li>
            <li><a href="logout.php">Sair</a></li>

        <!-- Se o usuário não estiver logado, mostra login e cadastro. -->
        <?php else: ?>

            <li><a href="login.php">Login</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>

        <?php endif; ?>

    </ul>
</nav>

</header>

<!-- Início do conteúdo principal da página. -->

<main>
