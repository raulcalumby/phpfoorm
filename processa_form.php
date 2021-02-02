<?php

require_once 'Pessoa.php';

$erro       = false;
$nome       = $_POST['nome'];
$sobrenome  = $_POST['sobrenome'];
$email      = $_POST['email'];
$telefone   = $_POST['telefone'];
$profissao  = $_POST['profissao'];


if (!isset($_POST) || empty($_POST)) {
    $erro = 'Nada foi postado.';
}


foreach ($_POST as $chave => $valor) {

    $$chave = trim(strip_tags($valor));


    if (empty($valor)) {
        $erro = 'existem campos em branco';
    }
}


if ((!isset($telefone) || !is_numeric($telefone)) && !$erro) {
    $erro = 'O telefone deve ser um valor número.';
}


if ((!isset($site) || !filter_var($site, FILTER_VALIDATE_URL)) && !$erro) {
    $erro = 'Envie um site válido.';
}


if ((!isset($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) && !$erro) {
    $erro = 'Envie um email válido.';
}


if ($erro) {
    echo $erro;
} else {

    echo "<h1> aqui esta o formulario </h1>";   
}




$pessoa = new Pessoa($nome, $sobrenome, $email, $telefone, $profissao);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Processa Formulário</title>
</head>

<body>
    <ul>
        <li><?= $pessoa->getNome() ?></li>
        <li><?= $pessoa->getSobrenome() ?></li>
        <li><?= $pessoa->getEmail() ?></li>
        <li><?= $pessoa->getTelefone() ?></li>
        <li><?= $pessoa->getProfissao() ?></li>
    </ul>


</body>

</html>