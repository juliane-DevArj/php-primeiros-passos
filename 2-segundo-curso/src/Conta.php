<?php

class Conta{

    // Atributos de uma conta (objeto)
    private string $cpfTitular;
    private string $nomeTitular;
    private float $saldo;
    //Atributo da Classe
    //private static int $quantidadeContasClasse = 0;
    

    //Métodos de uma conta
    public function __construct(string $cpfNovoCadastro,string $nomeNovoCadastro)
    {
        // Fazendo a inicialização dos atributos dentro do método construtor do PHP
        $this->cpfTitular = $cpfNovoCadastro;
        $this->validarNomeTitular($nomeNovoCadastro);
        $this->nomeTitular = $nomeNovoCadastro;
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
 
    public function getCpfTitular():string
    {
       return $this->cpfTitular;
    }

    
    public function getNomeTitular():string
    {
       return $this->nomeTitular;
    }

    // Regra de código: Todos os métodos são definidos com verbos no infinitivo.

    // Função interna, então é um método privado!! 

    private function validarNomeTitular($nomeNovoCadastro)
    {
        if(strlen($nomeNovoCadastro) < 5){
            echo "O nome do novo Titular precisa de pelo menos 5 caracteres.".PHP_EOL;
            exit;
        }
    }

  //  public static function getquantidadeContasClasse():int
 //   {
  //      return self::$quantidadeContasClasse;
 //   }

}