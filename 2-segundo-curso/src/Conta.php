<?php

require_once 'Titular.php';
require_once 'Endereco.php';

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

    public function getNome(): string {
        return $this->titular->getNome();
    }

    public function getCpf(): string {
        return $this->titular->getCpf();
    }

    public function getSaldo(): float {
        return $this->saldo;
    }

}