<?php
// Carrega as funções reutilizáveis do projeto.
require_once 'includes/funcoes.php';

// Inclui o cabeçalho da página.
include 'includes/header.php';

// Carrega os produtos cadastrados no arquivo JSON.
$produtos = carregarJson('data/produtos.json');

// Garante que produtos seja sempre um array.
if(!is_array($produtos)){
    $produtos = [];
}

// Recupera os produtos adicionados ao carrinho pela sessão.
$carrinho = $_SESSION['carrinho'] ?? [];

// Variável usada para calcular o valor total da compra.
$total = 0;
?>

<section class="carrinho">

```
<h2>Meu Carrinho</h2>

<?php if(empty($carrinho)): ?>

    <p class="mensagem-vazia">
        Seu carrinho está vazio.
    </p>

<?php else: ?>

    <div class="carrinho-lista">

        <?php foreach($carrinho as $id => $quantidade): ?>

            <?php
            // Procura no JSON o produto que possui o ID salvo no carrinho.
            $produtoEncontrado = null;

            foreach($produtos as $produto){
                if($produto['id'] == $id){
                    $produtoEncontrado = $produto;
                    break;
                }
            }

            // Se o produto não existir mais no JSON, pula para o próximo item.
            if($produtoEncontrado == null){
                continue;
            }

            // Calcula o subtotal do produto.
            $subtotal = $produtoEncontrado['preco'] * $quantidade;

            // Soma o subtotal ao total geral do carrinho.
            $total += $subtotal;
            ?>

            <div class="item-carrinho">

                <img
                    src="<?php echo protegerTexto($produtoEncontrado['imagem']); ?>"
                    alt="<?php echo protegerTexto($produtoEncontrado['nome']); ?>"
                >

                <div>
                    <h3>
                        <?php echo protegerTexto($produtoEncontrado['nome']); ?>
                    </h3>

                    <p>
                        Preço: <?php echo formatarPreco($produtoEncontrado['preco']); ?>
                    </p>

                    <p>
                        Subtotal: <?php echo formatarPreco($subtotal); ?>
                    </p>

                    <div class="acoes-carrinho">

                        <form action="controlles/atualizar_carrinho.php" method="post">
                            <input type="hidden" name="id" value="<?php echo (int) $produtoEncontrado['id']; ?>">
                            <input type="hidden" name="acao" value="remover">

                            <button type="submit" class="btn-qtd">
                                -
                            </button>
                        </form>

                        <span>
                            <?php echo (int) $quantidade; ?>
                        </span>

                        <form action="controlles/atualizar_carrinho.php" method="post">
                            <input type="hidden" name="id" value="<?php echo (int) $produtoEncontrado['id']; ?>">
                            <input type="hidden" name="acao" value="adicionar">

                            <button type="submit" class="btn-qtd">
                                +
                            </button>
                        </form>

                        <form action="controlles/atualizar_carrinho.php" method="post">
                            <input type="hidden" name="id" value="<?php echo (int) $produtoEncontrado['id']; ?>">
                            <input type="hidden" name="acao" value="deletar">

                            <button type="submit" class="btn-deletar">
                                Deletar
                            </button>
                        </form>

                    </div>
                </div>

            </div>

        <?php endforeach; ?>

    </div>

    <div class="total-carrinho">

        <h3>
            Total: <?php echo formatarPreco($total); ?>
        </h3>

        <a href="finalizar_compra.php" class="btn-finalizar">
            Finalizar Compra
        </a>

    </div>

    <div class="carrinho-acoes-final">

        <a href="produtos.php" class="btn-continuar">
            Continuar Comprando
        </a>

    </div>

<?php endif; ?>
```

</section>

<?php include 'includes/footer.php'; ?>
