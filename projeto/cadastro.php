<!DOCTYPE html>

<html lang="pt-BR">

<head>
    <!-- Define a codificação de caracteres da página. -->
    <meta charset="UTF-8">


<!-- Faz a página se adaptar melhor a diferentes tamanhos de tela. -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Título exibido na aba do navegador. -->
<title>Cadastro</title>

<!-- Importa o arquivo CSS da página de cadastro. -->
<link rel="stylesheet" href="assets/css/cadastro.css">

</head>

<body>
    <!-- Colocar logo da BitShop em próximas modificações-->


<!-- Caixa principal onde fica o formulário de cadastro. -->
<div class="box">

    <!-- Formulário que envia os dados para o processamento do cadastro. -->
    <form action="controlles/proc_cadastro.php" method="post">

        <!-- Agrupa os campos do formulário. -->
        <fieldset>

            <!-- Título do formulário. -->
            <legend>Faça seu Cadastro
            </legend>

            <br><br>

            <!-- Campo para o nome completo do usuário. -->
            <div class="input-box">
                <input class="input-user" type="text" name="nome" id="nome" required>
                <label class="label-input" for="nome">Nome completo</label>
            </div>

            <br><br>

            <!-- Campo para o email do usuário. -->
            <div class="input-box">
                <input class="input-user" type="email" name="email" id="email" required>
                <label class="label-input" for="email">Email</label>
            </div>

            <br><br>

            <!-- Campo para o telefone do usuário. -->
            <div class="input-box">
                <input class="input-user" type="tel" id="telefone" name="telefone" placeholder="             (XX) XXXXX-XXXX" required>
                <label class="label-input" for="telefone">Telefone</label>
            </div>

            <br>

            <!-- Grupo de opções para selecionar o sexo. -->
            <div class="grupo-radio">
                <p>Sexo</p>

                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>

                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>

                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
            </div>

            <!-- Campo para a data de nascimento do usuário. -->
            <div class="input-box" class="data">
                <label for="data_nascimento"><b>Data de Nascimento: </b></label> <br>
                <input class="input-user" type="date" name="data_nascimento" id="data_nascimento" required>
            </div>

            <br><br>

            <!-- Campo para a senha do usuário. -->
            <div class="input-box">
                <input class="input-user" type="password" name="senha" id="senha" required>
                <label class="label-input" for="senha">Senha</label>
            </div>

            <!-- Campo para confirmar a senha digitada. -->
            <div class="input-box">
                <input class="input-user" type="password" name="confirmar_senha" id="confirmar_senha" required>
                <label class="label-input" for="confirmar_senha">Confirmar senha</label>
            </div>

            <?php
            // Inicia a sessão para acessar mensagens temporárias.
            session_start();

            // Verifica se existe mensagem de erro na sessão.
            if (isset($_SESSION['erro'])) {

                // Exibe a mensagem de erro na tela.
                echo '<p class="mensagem erro">' . $_SESSION['erro'] . '</p>';

                // Remove a mensagem de erro para ela não aparecer novamente.
                unset($_SESSION['erro']);
            }

            // Verifica se existe mensagem de sucesso na sessão.
            if (isset($_SESSION['sucesso'])) {

                // Exibe a mensagem de sucesso na tela.
                echo '<p class="mensagem sucesso">' . $_SESSION['sucesso'] . '</p>';

                // Remove a mensagem de sucesso para ela não aparecer novamente.
                unset($_SESSION['sucesso']);
            }
            ?>

            <!-- Botão responsável por enviar o formulário de cadastro. -->
            <button type="submit" name="submit" id="submit">Cadastrar</button>

            <br>
            <br>

            <!-- Link para a página de login. -->
            <a class="login" href="login.php">Faça Login</a>

        </fieldset>
    </form>

</div>


</body>

</html>
