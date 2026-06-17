<?php

// Inicia a sessão para acessar os dados do usuário logado.
session_start();

// Encerra a sessão atual, removendo os dados salvos nela.
session_destroy();

// Redireciona o usuário para a página de login.
header('Location: login.php');

// Encerra a execução do código após o redirecionamento.
exit;
