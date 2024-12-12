<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem. '<br>';
}


function sacar(array $conta, float $valorSacar):array
{

    if($valorSacar > $conta['saldo']){
        exibeMensagem("Você não pode sacar");
    }
    else {
        $conta['saldo'] -=20;
    }

    return $conta;

}

function depositar(array $conta, float $valorDepositar)
{
    // Nem sempre essa função vai retorna um array
    
    if($valorDepositar > 0){
        $conta['saldo'] += $valorDepositar;
        return $conta;
    }
    else{
        exibeMensagem("Você não pode sacar");
        // Com esse else o retorno da função se torna VOID (vazio)
    }

}   

function titularComLetrasMaiusculas(array &$conta)
{
    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    // Essa é a sintaxe do list 
    ['titular' => $titular, 'saldo' => $saldo] = $conta;

    echo "<li>
        Titular: $titular. 
        Saldo : $saldo
    </li>"; 
}