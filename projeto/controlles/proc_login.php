<?php
session_start();

$arquivo = '../data/usuarios.json';

$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

if($email == '' || $senha == ''){
    $_SESSION['erro'] = 'Informe e-mail e senha.';
    header('Location: ../login.php');
    exit;
}

if(!file_exists($arquivo)){
    $_SESSION['erro'] = 'Nenhum usuário cadastrado.';
    header('Location: ../login.php');
    exit;
}

$usuarios = json_decode(file_get_contents($arquivo), true);

foreach($usuarios as $usuario){
    if($usuario['email'] == $email && password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];

        header('Location: ../painel.php');
        exit;
    }
}

$_SESSION['erro'] = 'E-mail ou senha incorretos.';
header('Location: ../login.php');
exit;