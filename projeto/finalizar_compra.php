<?php
// Inicia a sessão para acessar os dados salvos em $_SESSION.
session_start();

// Recupera o carrinho salvo na sessão.
// Se não existir carrinho, cria um array vazio.
$carrinho = $_SESSION['carrinho'] ?? [];

// Verifica se o carrinho está vazio.
if(empty($carrinho)){

    // Se estiver vazio, redireciona o usuário para a página do carrinho.
    header('Location: carrinho.php');

    // Encerra a execução do código após o redirecionamento.
    exit;
}

// Inclui o cabeçalho da página.
include 'includes/header.php';
?>

<section class="painel">


<div class="painel-card">

    <!-- Título da página de finalização da compra. -->
    <h2>Finalizar Compra</h2>

    <!-- Texto explicando o objetivo da página. -->
    <p>Revise seus dados e confirme a compra dos produtos adicionados ao carrinho.</p>

    <!-- Área com as informações do cliente e do pedido. -->
    <div class="painel-info">

        <!-- Exibe o nome do usuário logado ou "Visitante" caso não exista usuário na sessão. -->
        <p><strong>Cliente:</strong> <?php echo $_SESSION['usuario'] ?? 'Visitante'; ?></p>

        <!-- Exibe o email do usuário logado ou uma mensagem padrão caso não exista email na sessão. -->
        <p><strong>Email:</strong> <?php echo $_SESSION['email'] ?? 'Não informado'; ?></p>

        <!-- Exibe o status atual do pedido. -->
        <p><strong>Status:</strong> Pedido aguardando confirmação.</p>
    </div>

    <!-- Área de pagamento via Pix. -->
    <div class="pagamento-qrcode">

        <!-- Título da forma de pagamento. -->
        <h3>Pagamento via Pix</h3>

        <!-- Imagem do QR Code usado para pagamento. -->
        <img src="assets/img/qrcode.png" alt="QR Code para pagamento">

        <!-- Orientação para o usuário realizar o pagamento. -->
        <p>Escaneie o QR Code para realizar o pagamento.</p>
    </div>

    <!-- Área dos botões de ação da finalização. -->
    <div class="painel-acoes">

        <!-- Link para voltar ao carrinho antes de confirmar o pedido. -->
        <a href="carrinho.php" class="btn-painel">
            Voltar ao Carrinho
        </a>

        <!-- Formulário para confirmar o pedido. -->
        <form action="pedido_confirmado.php" method="post" target="_blank">

            <!-- Botão que envia a confirmação do pedido. -->
            <button type="submit" class="btn-painel btn-confirmar">
                Confirmar Pedido
            </button>
        </form>

    </div>

</div>


</section>

<?php include 'includes/footer.php'; ?>
