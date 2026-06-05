<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/cadastro.css">
</head>
<!-- Colocar logo da BitShop em próximas modificações-->

<body>
    <div class="box">

        <form action="controlles/proc_login.php" method="post">
            <fieldset>
                <legend><a href="index.php">BITShop</a>
                </legend>
                <h2 class="titulo">USER LOGIN</h2>
                <br>
                <div class="input-box">
                    <input class="input-user" type="email" name="email" id="email" required>
                    <label class="label-input" for="email">Email</label>
                </div>
                <br><br>

                <div class="input-box">
                    <input class="input-user" type="password" name="senha" id="senha" required>
                    <label class="label-input" for="senha">Digite sua senha</label>
                </div>
                <br>
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
                <br>


                <p>
                    <a class="cadastro" href="cadastro.php">Faça seu cadastro </a>
                </p>


                <button type="submit" name="submit" id="submit">Entrar</button>
            </fieldset>
        </form>


    </div>

</body>

</html>