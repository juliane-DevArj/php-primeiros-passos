<?php

// Ele vai colocar o arquivo de funções como obrigatório! E APENAS UMA UNICA VEZ
// DEIXE COMO OBRIGATÓRIO, MAS APENAS UMA VEZ O ARQUIVO DE FUNÇÕES!!
// REQUIRE + ONCE => TRAGA COMO OBRIGATÓRIO APENAS UMA VEZ!
require_once 'funcoes.php';

$contasCorrentes = [

    '472.769.808-04' => [
        'titular'=> 'Joy',
        'saldo'=> 300,
    ],

    '201.866.268-60'=> [
        'titular'=> 'Emma',
        'saldo'=> 300,
    ],

    '472.769.438-79'=> [
        'titular'=> 'Grace',
        'saldo'=> 300,
    ],

    '507.649.688-58'=> [
        'titular'=> 'Noah',
        'saldo'=> 300,
    ],

    '195.294.418-00'=> [
        'titular'=> 'Alex',
        'saldo'=> 300,
    ]

];

// Aqui estou mexendo no Array original, pois atribui o retorno da função para o CPF do Array
$contasCorrentes['507.649.688-58'] = sacar($contasCorrentes['507.649.688-58'],valorSacar: 20);
$contasCorrentes['472.769.808-04'] = depositar($contasCorrentes['472.769.808-04'],20);

foreach($contasCorrentes as $cpf => $conta){

   exibeMensagem(
    "$cpf {$conta['titular']} {$conta['saldo']} "
    ) ;

};
