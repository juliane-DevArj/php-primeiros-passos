<?php

$conta1 = [
    'nome' => "Juliane",
    'saldo' => '10000',
];

$conta2 = [
    'nome' => "Débora",
    'saldo' => '10000',
];

$conta3 = [
    'nome' => "Renata",
    'saldo' => '10000',
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for(
    $i = 0; $i < count($contasCorrentes); $i++) {

    echo $contasCorrentes[$i]['saldo'].PHP_EOL;

}