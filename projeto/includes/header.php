<?php
if(session_status() === PHP_SESSION_NONE){
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BITShop</title>

    <link rel="stylesheet" href="assets/css/style.css"> 
</head>
<body>

<header>
   <div class="logo">
    <a href="index.php">BITShop</a>
</div>
<div class="barra-pesquisa">
    <form action="produtos.php" method="GET">
        <input
            type="text"
            name="busca"
            placeholder="Pesquisar produtos..."
        >

        <button type="submit">
            🔍
        </button>
    </form>
</div>

    <nav>
        <ul>
            <li><a href="index.php">Início</a></li>
            <li><a href="produtos.php">Produtos</a></li>
            <li><a href="sobre.php">Sobre</a></li>

            <?php if(isset($_SESSION['usuario'])): ?>

                <li><a href="carrinho.php">Carrinho</a></li>
                <li><a href="painel.php">Painel</a></li>
                <li><a href="logout.php">Sair</a></li>

            <?php else: ?>

                <li><a href="login.php">Login</a></li>
                <li><a href="cadastro.php">Cadastro</a></li>

            <?php endif; ?>

        </ul>
    </nav>

    
</header>

<main>