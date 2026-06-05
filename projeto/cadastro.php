<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/cadastro.css">
</head>

<body>
    <!-- Colocar logo da BitShop em próximas modificações-->

    <div class="box">
        <?php
        session_start();

        if (isset($_SESSION['erro'])) {
            echo '<p class="mensagem erro">' . $_SESSION['erro'] . '</p>';
            unset($_SESSION['erro']);
        }

        if (isset($_SESSION['sucesso'])) {
            echo '<p class="mensagem sucesso">' . $_SESSION['sucesso'] . '</p>';
            unset($_SESSION['sucesso']);
        }
        ?>

        <form action="controlles/proc_cadastro.php" method="post">
            <fieldset>
                <legend>Faça seu Cadastro
                </legend>

                <br><br>
                <div class="input-box">
                    <input class="input-user" type="text" name="nome" id="nome" required>
                    <label class="label-input" for="nome">Nome completo</label>
                </div>
                <br><br>
                <div class="input-box">
                    <input class="input-user" type="email" name="email" id="email" required>
                    <label class="label-input" for="email">Email</label>
                </div>
                <br><br>
                <div class="input-box">
                    <input class="input-user" type="tel" id="telefone" name="telefone" placeholder="             (XX) XXXXX-XXXX" required>
                    <label class="label-input" for="telefone">Telefone</label>
                </div>
                <br>

                <div class="grupo-radio">
                    <p>Sexo</p>

                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>

                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>

                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                </div>

                <div class="input-box" class="data">
                    <label for="data_nascimento"><b>Data de Nascimento: </b></label> <br>
                    <input class="input-user" type="date" name="data_nascimento" id="data_nascimento" required>
                </div>
                <br><br>
                <div class="input-box">
                    <input class="input-user" type="password" name="senha" id="senha" required>
                    <label class="label-input" for="senha">Senha</label>
                </div>

                <div class="input-box">
                    <input class="input-user" type="password" name="confirmar_senha" id="confirmar_senha" required>
                    <label class="label-input" for="confirmar_senha">Confirmar senha</label>
                </div>
                
                <button type="submit" name="submit" id="submit">Cadastrar</button>
                <br>
                <br>
                <a class="login" href="login.php">Faça Login</a>
            </fieldset>
        </form>

    </div>

</body>

</html>