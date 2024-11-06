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


titularComLetrasMaiusculas($contasCorrentes['507.649.688-58']);

unset($contasCorrentes['201.866.268-60']);

// Aqui estou mexendo no Array original, pois atribui o retorno da função para o CPF do Array
$contasCorrentes['507.649.688-58'] = sacar($contasCorrentes['507.649.688-58'],valorSacar: 20);
$contasCorrentes['472.769.808-04'] = depositar($contasCorrentes['472.769.808-04'],20);


foreach($contasCorrentes as $cpf => $conta){

    ['titular' => $titular, 'saldo' => $saldo] = $conta;

   exibeMensagem(
    " $cpf $titular $saldo"
    ) ;

};

echo "<ul>";

foreach($contasCorrentes as $cpf => $conta){

    exibeConta($conta);
};
echo "</ul>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Banco</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta){ ?>
        <dt>
            <h3> <?= $conta['titular']; 
            // Vc pode substituir o php echo por ?= "Ele já sabe que é para dar um print daquela instrução!"
            ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: 
            <?= $conta['saldo'];?>
        </dd>
        <?php } ?>
     </dl>
</body>
</html>

