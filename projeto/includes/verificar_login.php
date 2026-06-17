<?php

// Verifica se a sessão ainda não foi iniciada.
if(session_status() === PHP_SESSION_NONE){

    // Inicia a sessão para permitir o uso de $_SESSION.
    session_start();
}

// Verifica se o usuário não está logado.
if(!isset($_SESSION['usuario'])){

    // Redireciona o usuário para a página de login.
    header('Location: login.php');

    // Encerra a execução do código após o redirecionamento.
    exit;
}
