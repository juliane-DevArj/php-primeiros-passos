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