<?php
// Inclui o cabeçalho da página.
include 'includes/header.php';

// Remove o carrinho da sessão após a confirmação do pedido.
unset($_SESSION['carrinho']);
?>

<section class="painel">


<!-- Card principal da mensagem final do pedido. -->
<div class="painel-card mensagem-final">

    <!-- Mensagem de destaque exibida após confirmar o pedido. -->
    <h2>321...!!</h2>

    <!-- Texto de agradecimento exibido ao usuário. -->
    <p>
        Obrigado meu querido 2AII, nós somos os melhores(++), um abraço a todos!
    </p>

    <!-- Área com o botão de retorno para a loja. -->
    <div class="painel-acoes">

        <!-- Link para voltar à página inicial da BITShop. -->
        <a href="index.php" class="btn-painel">
            Voltar para a BITShop
        </a>
    </div>

</div>


</section>

<?php include 'includes/footer.php'; ?>
