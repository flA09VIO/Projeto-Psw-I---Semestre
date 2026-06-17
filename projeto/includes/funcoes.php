<?php

function formatarPreco($preco){
    return 'R$ ' . number_format($preco, 2, ',', '.');
}

function protegerTexto($texto){
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

function carregarJson($caminho){
    if(!file_exists($caminho)){
        return [];
    }

    $dados = file_get_contents($caminho);
    return json_decode($dados, true);
}