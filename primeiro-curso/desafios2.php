<?php

// Exibindo a Tabuada de um número, de 1 até 10;
$numero = 7;
$limite = 10;

for ($i = 1; $i < $limite; $i++ ){
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado".PHP_EOL;
}