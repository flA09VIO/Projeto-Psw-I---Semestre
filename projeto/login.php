<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <!-- Define a codificação de caracteres da página. -->
    <meta charset="UTF-8">


<!-- Faz a página se adaptar melhor a telas menores. -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Título exibido na aba do navegador. -->
<title>Cadastro</title>

<!-- Importa o arquivo CSS usado na página. -->
<link rel="stylesheet" href="assets/css/cadastro.css">


</head>
<!-- Colocar logo da BitShop em próximas modificações-->

<body>
    <!-- Caixa principal do formulário de login. -->
    <div class="box">


    <!-- Formulário que envia os dados para o processamento do login. -->
    <form action="controlles/proc_login.php" method="post">

        <!-- Agrupa os campos do formulário. -->
        <fieldset>

            <!-- Nome da loja com link para a página inicial. -->
            <legend><a href="index.php">BITShop</a>
            </legend>

            <!-- Título da área de login. -->
            <h2 class="titulo">USER LOGIN</h2>

            <br>

            <!-- Campo para o email do usuário. -->
            <div class="input-box">
                <input class="input-user" type="email" name="email" id="email" required>
                <label class="label-input" for="email">Email</label>
            </div>

            <br><br>

            <!-- Campo para a senha do usuário. -->
            <div class="input-box">
                <input class="input-user" type="password" name="senha" id="senha" required>
                <label class="label-input" for="senha">Digite sua senha</label>
            </div>

            <br>

            <?php
            // Inicia a sessão para acessar mensagens temporárias.
            session_start();

            // Verifica se existe uma mensagem de erro na sessão.
            if (isset($_SESSION['erro'])) {

                // Exibe a mensagem de erro na tela.
                echo '<p class="mensagem erro">' . $_SESSION['erro'] . '</p>';

                // Remove a mensagem para ela não aparecer novamente.
                unset($_SESSION['erro']);
            }

            // Verifica se existe uma mensagem de sucesso na sessão.
            if (isset($_SESSION['sucesso'])) {

                // Exibe a mensagem de sucesso na tela.
                echo '<p class="mensagem sucesso">' . $_SESSION['sucesso'] . '</p>';

                // Remove a mensagem para ela não aparecer novamente.
                unset($_SESSION['sucesso']);
            }
            ?>

            <br>

            <!-- Link para o usuário criar uma conta caso ainda não tenha cadastro. -->
            <p>
                <a class="cadastro" href="cadastro.php">Faça seu cadastro </a>
            </p>

            <!-- Botão responsável por enviar o formulário de login. -->
            <button type="submit" name="submit" id="submit">Entrar</button>

        </fieldset>
    </form>

</div>


</body>

</html>
