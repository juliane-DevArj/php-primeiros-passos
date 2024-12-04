<?php

class Conta{

    // Atributo de uma conta
    private string $cpfTitular = "";
    private string $nomeTitular = "";
    private float $saldo = 0;
    

    //Método de uma conta
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
 
    public function defineCpfTitular($cpf):void
    {
        $this->cpfTitular = $cpf;
    }


    public function defineNomeTitular($nome):void
    {
        $this->nomeTitular = $nome;
    }

    public function recuperaCpfTitular():string
    {
       return $this->cpfTitular;
    }

    
    public function recuperaNomeTitular():string
    {
       return $this->nomeTitular;
    }

}