<?php

namespace Modelo\Conta;

use Modelo\Conta\Titular; 

require_once __DIR__ . '/Titular.php';
require_once __DIR__ . '/../Endereco.php';
//------------------------------- ACIMA -- > REFERENCIA DE LOCAIS DE ARQUIVOS

class Conta{

    // Atributos de uma conta (objeto)
    private Titular $titular;
    private float $saldo;
    //Atributo da Classe

    //Métodos de uma conta
    public function __construct(Titular $titular)
    {
        // Fazendo a inicialização dos atributos dentro do método construtor do PHP
        $this->titular = $titular;
        $this->saldo = 0;

      //  self::$quantidadeContasClasse++;
    }

    public function sacar($valoraSacar): void
    {
        if($valoraSacar > $this->saldo){
            echo "Saldo inválido";
            return;
        }
        $this->saldo -= $valoraSacar; 
        

    }

    public function depositar($valoraDepositar): void
    {
        if($valoraDepositar < 0){
            echo "Depósito inválido";
            return;
        }
       
        $this->saldo += $valoraDepositar;
       

    }

    public function transferir($valoraTransferir, Conta $contaDestino):void
    {
        if($valoraTransferir > $this->saldo){
            echo "Saldo indisponível";
            return;
        }
        
        $this->sacar($valoraTransferir);
        $contaDestino->depositar($valoraTransferir);
        
    }

    public function recuperaNome(): string {
        return $this->titular->recuperaNome();
    }

    public function recuperaCpf(): string {
        return $this->titular->recuperaCpf();
    }

    public function recuperaSaldo(): float {
        return $this->saldo;
    }

}