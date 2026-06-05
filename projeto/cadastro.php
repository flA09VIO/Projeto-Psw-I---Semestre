<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="assets/css/cadastro.css">
</head>
<body>
    <div class="box">
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
                <label  class="label-input" for="email">Email</label>
            </div>
            <br><br>
            <div class="input-box">
                <input  class="input-user" type="tel" id="telefone" name="telefone"placeholder="          (XX) XXXXX-XXXX" required>
                <label class="label-input" for="telefone">Telefone</label>
            </div>
            <br>

            <p>Sexo</p>
            <input type="radio" id="feminino" nome="genero" value="feminino " required>
            <label for="feminino">Feminino</label>

            <input type="radio" id="masculino" nome="genero" value="masculino" required>
            <label for="masculino">Masculino</label>

           
            <input type="radio" id="outro" nome="genero" value="outro" required>
            <label for="masculino">Outro</label>
            <br><br>
            <br>

            <div class="input-box" class="data">
                 <label for="data_nascimento"><b>Data de Nascimento: </b></label> <br>
            <input class="input-user" type="date" name="data_nascimento" id="data_nascimento" required>
            </div>
            <br><br>

            <button type="submit" name = "submit" id="submit">Cadastrar</button>
            <br>
            <br>
            <a class="login" href="login.php" >Faça Login</a>
            </fieldset>
        </form>
        
    </div>
    
</body>
</html>                                                                                                                                                           