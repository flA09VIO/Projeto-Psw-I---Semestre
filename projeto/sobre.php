<?php 
// Inclui o cabeçalho da página.
include 'includes/header.php'; 
?> 

<!-- Seção principal da página Sobre. -->

<section class="sobre">


<!-- Card que agrupa todo o conteúdo informativo da página. -->
<div class="sobre-card">

    <!-- Título principal da página Sobre. -->
    <h2>Sobre a BITShop</h2>

    <!-- Parágrafo de apresentação da loja virtual. -->
    <p>
        A <strong>BITShop</strong> nasceu com o objetivo de simular uma loja virtual moderna,
        voltada para a venda de produtos de tecnologia, como computadores, notebooks,
        periféricos, peças de hardware e acessórios.
    </p>

    <!-- Parágrafo explicando o contexto e as tecnologias usadas no projeto. -->
    <p>
        O projeto foi desenvolvido como parte dos estudos de Programação para Web,
        utilizando tecnologias como <strong>HTML, CSS, PHP, sessões e arquivos JSON</strong>.
        A ideia principal é demonstrar, de forma prática, como funciona a estrutura de uma
        loja online, desde a listagem de produtos até o carrinho de compras e a finalização
        do pedido.
    </p>

    <!-- Parágrafo explicando a proposta de experiência da BITShop. -->
    <p>
        A BITShop foi pensada para oferecer uma experiência simples, organizada e objetiva.
        Os produtos são carregados dinamicamente a partir de um arquivo JSON, permitindo
        maior facilidade na manutenção e atualização dos dados da loja.
    </p>

    <!-- Parágrafo listando as principais funcionalidades do sistema. -->
    <p>
        Além disso, o sistema conta com cadastro de usuários, login com autenticação,
        carrinho utilizando sessões, filtro por categorias, busca de produtos e uma página
        de finalização de compra com simulação de pagamento via Pix.
    </p>

    <!-- Parágrafo de fechamento explicando a importância do projeto. -->
    <p>
        Mais do que uma loja fictícia, a BITShop representa a aplicação prática dos
        conhecimentos adquiridos durante o desenvolvimento web, unindo lógica de programação,
        organização de arquivos, estilização e controle de dados.
    </p>

    <!-- Área com os destaques informativos da loja. -->
           <div class="sobre-destaques">

        <!-- Card explicando a missão do projeto. -->
        <div>
            <h3>Missão</h3>
            <p>
                Simular uma loja virtual funcional, moderna e organizada, aplicando conceitos
                fundamentais de desenvolvimento web.
            </p>
        </div>

        <!-- Card informando as tecnologias usadas no desenvolvimento. -->
        <div>
            <h3>Tecnologias</h3>
            <p>
                HTML, CSS, PHP, JSON, sessões, formulários, autenticação e manipulação de dados.
            </p>
        </div>

        <!-- Card explicando o objetivo geral da aplicação. -->
        <div>
            <h3>Objetivo</h3>
            <p>
                Demonstrar uma aplicação web completa, com visual profissional e funcionalidades
                próximas de uma loja real.
            </p>
        </div>

    </div>

    <!-- Área da imagem ilustrativa da página Sobre. -->
    <div class="sobre-imagem">
        <img src="assets/img/fundadores-bitshop.png" alt="Imagem ilustrativa da BITShop">
    </div>

</div>


</section>

<?php 
// Inclui o rodapé da página.
include 'includes/footer.php'; 
?>
