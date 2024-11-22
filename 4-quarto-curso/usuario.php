<?php

$nome = 'Juliane Beda';
$email = ' juliane.bca@gmail.com ';
$senha ='áéíóúj';

echo mb_strlen($senha).PHP_EOL;

if (mb_strlen($senha    )< 8){
    echo 'Senha insegura'. PHP_EOL;

}

// Separando, antes do Arroba e depois do Arroba;

$posicaoDoArroba = strpos($email, '@');
$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario). PHP_EOL;
echo substr($email, $posicaoDoArroba + 1). PHP_EOL;

// Numa lista com nome e sobre nome, separe o nome até o espaço, e depois do espaço!
list($nome,$sobrenome) = explode(' ', $nome);

echo 'Nome: '.$nome. PHP_EOL;
echo 'Sobrenome: '.$sobrenome. PHP_EOL;

$csv ='Juliane Beda,24,juliane.bca@gmail.com';
var_dump(explode(',', $csv));

echo trim($email).PHP_EOL;

