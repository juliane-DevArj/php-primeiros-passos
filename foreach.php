<?php

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

if(300 > $contasCorrentes['507.649.688-58']['saldo']){
    echo $contasCorrentes['507.649.688-58']['titular'] . "você não pode sacar um valor maior do que ". $contasCorrentes['saldo'] .PHP_EOL;
}
else {
    $contasCorrentes['507.649.688-58']['saldo'] -=20;
}

foreach($contasCorrentes as $cpf => $conta){

    echo $cpf ." ".$conta['titular']." ".$conta['saldo']. PHP_EOL;

};
