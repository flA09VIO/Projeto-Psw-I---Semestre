<?php
session_start();

$arquivo = '../data/usuarios.json';

$nome = trim($_POST['nome'] ?? '');
$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');
$confirmarSenha = trim($_POST['confirmar_senha'] ?? '');

if($nome == '' || $email == '' || $senha == '' || $confirmarSenha == ''){
    $_SESSION['erro'] = 'Preencha todos os campos obrigatórios.';
    header('Location: ../cadastro.php');
    exit;
}

if($senha != $confirmarSenha){
    $_SESSION['erro'] = 'As senhas não são iguais.';
    header('Location: ../cadastro.php');
    exit;
}

if(!file_exists($arquivo)){
    file_put_contents($arquivo, '[]');
}

$usuarios = json_decode(file_get_contents($arquivo), true);

foreach($usuarios as $usuario){
    if($usuario['email'] == $email){
        $_SESSION['erro'] = 'Este e-mail já está cadastrado.';
        header('Location: ../cadastro.php');
        exit;
    }
}

$usuarios[] = [
    'nome' => $nome,
    'email' => $email,
    'senha' => password_hash($senha, PASSWORD_DEFAULT)
];

file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

$_SESSION['sucesso'] = 'Cadastro realizado com sucesso. Faça login.';
header('Location: ../login.php');
exit;
