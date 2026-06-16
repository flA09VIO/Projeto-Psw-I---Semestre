<?php
session_start();

$carrinho = $_SESSION['carrinho'] ?? [];

if(empty($carrinho)){
    header('Location: carrinho.php');
    exit;
}

include 'includes/header.php';
?>

<section class="painel">

    <div class="painel-card">

        <h2>Finalizar Compra</h2>

        <p>Revise seus dados e confirme a compra dos produtos adicionados ao carrinho.</p>

        <div class="painel-info">
            <p><strong>Cliente:</strong> <?php echo $_SESSION['usuario'] ?? 'Visitante'; ?></p>
            <p><strong>Email:</strong> <?php echo $_SESSION['email'] ?? 'Não informado'; ?></p>
            <p><strong>Status:</strong> Pedido aguardando confirmação.</p>
        </div>

        <div class="pagamento-qrcode">
            <h3>Pagamento via Pix</h3>

            <img src="assets/img/qrcode.png" alt="QR Code para pagamento">

            <p>Escaneie o QR Code para realizar o pagamento.</p>
        </div>

        <div class="painel-acoes">

            <a href="carrinho.php" class="btn-painel">
                Voltar ao Carrinho
            </a>

            <form action="pedido_confirmado.php" method="post" target="_blank">
                <button type="submit" class="btn-painel btn-confirmar">
                    Confirmar Pedido
                </button>
            </form>

        </div>

    </div>

</section>

<?php include 'includes/footer.php'; ?>