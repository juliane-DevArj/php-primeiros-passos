<?php

function exibeMensagem($mensagem)
{
    echo $mensagem. PHP_EOL;
};


function sacar($conta,$valorSacar)
{

    if($valorSacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar");
    }
    else {
        $conta['saldo'] -=20;
    }

    return $conta;

}

function depositar($conta,$valorDepositar)
{
    
    if($valorDepositar > 0){
        $conta['saldo'] += $valorDepositar;
        return $conta;
    }
    else{
        exibeMensagem("Você não pode sacar");
    }

}


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

    echo $cpf ." ".$conta['titular']." ".$conta['saldo']. PHP_EOL;

};
