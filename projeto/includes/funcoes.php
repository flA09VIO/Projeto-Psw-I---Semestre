<?php

// Função para formatar o preço no padrão brasileiro.
function formatarPreco($preco){
    return 'R$ ' . number_format($preco, 2, ',', '.');
}

// Função para proteger textos exibidos na tela.
function protegerTexto($texto){
    return htmlspecialchars($texto, ENT_QUOTES, 'UTF-8');
}

// Função para carregar dados de um arquivo JSON.
function carregarJson($caminho){
    // Verifica se o arquivo existe.
    if(!file_exists($caminho)){
        return [];
    }

    // Lê o conteúdo do arquivo.
    $dados = file_get_contents($caminho);

    // Converte o JSON para array PHP.
    return json_decode($dados, true);
}
