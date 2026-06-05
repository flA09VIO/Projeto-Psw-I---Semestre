<?php
session_start();

$id = $_POST['id'] ?? '';
$acao = $_POST['acao'] ?? '';

if($id == '' || $acao == ''){
    header('Location: ../carrinho.php');
    exit;
}

if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

if($acao == 'adicionar'){
    if(isset($_SESSION['carrinho'][$id])){
        $_SESSION['carrinho'][$id]++;
    } else {
        $_SESSION['carrinho'][$id] = 1;
    }
}

if($acao == 'remover'){
    if(isset($_SESSION['carrinho'][$id])){
        $_SESSION['carrinho'][$id]--;

        if($_SESSION['carrinho'][$id] <= 0){
            unset($_SESSION['carrinho'][$id]);
        }
    }
}

if($acao == 'deletar'){
    unset($_SESSION['carrinho'][$id]);
}

header('Location: ../carrinho.php');
exit;