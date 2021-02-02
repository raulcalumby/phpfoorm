<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Salão</title>
</head>

<body>
    <h1>Cadastro</h1>
    <form action="processa_form.php" method="POST">
        <div>
            <label for="">Nome</label>
            <input type="text" id="nome" name="nome" placeholder="digite seu nome aqui">


        </div>
        <div>
            <label for="">Sobrenome</label>
            <input type="text" id="sobrenome" name="sobrenome" placeholder="digite seu Sobrenome aqui">


        </div>
        <div>
            <label for="">email</label>
            <input type="email" id="email" name="email" placeholder="digite seu nome aqui">


        </div>
        <div>
            <label for="">Telefone</label>
            <input type="tel" id="telefone" name="telefone" placeholder="seu numero">


        </div>
        <div>
            <label for="">Profissao</label>
            <input type="text" id="profissao" name="profissao" placeholder="sua profissao">


        </div>

        <div>
            
            <input type="submit" value="Enviar Formulario">

        </div>


    </form>

</body>

</html>