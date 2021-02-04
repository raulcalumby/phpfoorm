<?php
// Vou criar um array para coletar erros 

$erro = [];

$variavel_1 = '';
$variavel_2 = '123456';
$variavel_3 = '7.50';

# Verifico se a variavel 1 é vazia
if(empty($variavel_1)){
	array_push($erro, 'A variavel 1 não pode ser vazia');    
}

if(empty($variavel_2) || !is_int($variavel_2)){
	array_push($erro, 'A variavel 2 não pode ser vazia e deve ser um inteiro');    
}

if(empty($variavel_3) || !is_float($variavel_3)){
	array_push($erro, 'A variavel 3 não pode ser vazia e deve ser um float');    
}

if(!empty($erro)){
	foreach($erro as $e){
    	echo $e . '<br>';
    }
}else{
	echo 'Passou na validação';
}

?>