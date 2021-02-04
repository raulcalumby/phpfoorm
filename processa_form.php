<?php

require_once 'Pessoa.php';

$erro       = [];
$nome       = $_POST['nome'];
$sobrenome  = $_POST['sobrenome'];
$email      = $_POST['email'];
$telefone   = $_POST['telefone'];
$profissao  = $_POST['profissao'];

foreach ($_POST as $chave => $valor) {
    $chave = trim(strip_tags($valor));
    if (empty($valor)) {
        array_push($erro, 'existem campos em branco');
    }
}

if (empty($telefone) || !is_numeric($telefone)) {

    array_push($erro, 'O telefone deve ser um numero ');
}

if (!empty($site) || !filter_var($site, FILTER_VALIDATE_URL) == false) {
    array_push($erro, 'o site nao esta valido');
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($erro, 'email nao esta valido');
}

if (!empty($erro)) {
    foreach ($erro as $e) {
        echo $e . '<br>';
    }
} else {
    echo "<h1> aqui esta o formulario </h1>";

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

<?php } ?>