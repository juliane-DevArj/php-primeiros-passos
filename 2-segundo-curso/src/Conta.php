<?php

class Conta{

    // Atributo de uma conta
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    

    //Método de uma conta
    public function __construct(string $cpfNovoCadastro,string $nomeNovoCadastro)
    {
        // Fazendo a inicialização dos atributos dentro do método construtor do PHP
        $this->cpfTitular = $cpfNovoCadastro;
        $this->nomeTitular = $nomeNovoCadastro;
        $this->saldo = 0;
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
 
    public function getCpfTitular():string
    {
       return $this->cpfTitular;
    }

    
    public function getNomeTitular():string
    {
       return $this->nomeTitular;
    }

    // Regra de código: Todos os métodos são definidos com verbos no infinitivo.

}