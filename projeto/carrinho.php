<?php
include 'includes/header.php';

$produtos = json_decode(
    file_get_contents('data/produtos.json'),
    true
);

$carrinho = $_SESSION['carrinho'] ?? [];

$total = 0;
?>

<section class="carrinho">

    <h2>Meu Carrinho</h2>

    <?php if (empty($carrinho)): ?>

        <p class="mensagem-vazia">Seu carrinho está vazio.</p>

    <?php else: ?>

        <div class="carrinho-lista">

            <?php foreach ($carrinho as $id => $quantidade): ?>

                <?php
                foreach ($produtos as $produto) {
                    if ($produto['id'] == $id) {
                        $subtotal = $produto['preco'] * $quantidade;
                        $total += $subtotal;
                ?>

                        <div class="item-carrinho">

                            <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">

                            <div>
                                <h3><?php echo $produto['nome']; ?></h3>

                                <p>Preço: R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></p>

                                <p>Subtotal: R$ <?php echo number_format($subtotal, 2, ',', '.'); ?></p>

                                <div class="acoes-carrinho">

                                    <form action="controlles/atualizar_carrinho.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                                        <input type="hidden" name="acao" value="remover">
                                        <button type="submit" class="btn-qtd">-</button>
                                    </form>

                                    <span><?php echo $quantidade; ?></span>

                                    <form action="controlles/atualizar_carrinho.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                                        <input type="hidden" name="acao" value="adicionar">
                                        <button type="submit" class="btn-qtd">+</button>
                                    </form>

                                    <form action="controlles/atualizar_carrinho.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $produto['id']; ?>">
                                        <input type="hidden" name="acao" value="deletar">
                                        <button type="submit" class="btn-deletar">Deletar</button>
                                    </form>
                                    <div class="carrinho-acoes-final">

                                        <a href="produtos.php" class="btn-continuar">
                                            Continuar Comprando
                                        </a>

                                    </div>

                                </div>
                            </div>

                        </div>

                <?php
                    }
                }
                ?>

            <?php endforeach; ?>

        </div>

<div class="total-carrinho">

    <h3>Total: R$ <?php echo number_format($total, 2, ',', '.'); ?></h3>

    <a href="finalizar_compra.php" class="btn-finalizar">
        Finalizar Compra
    </a>

</div>

    <?php endif; ?>

</section>

<?php include 'includes/footer.php'; ?>