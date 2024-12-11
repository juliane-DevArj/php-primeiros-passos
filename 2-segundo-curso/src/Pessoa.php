<?php

class Pessoa{

    protected string $cpf;
    protected string $nome;
    

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->validarNome($nome);
        $this->nome = $nome;
        
    }

    public function recuperaCpf():string
    {
        return $this->cpf;
    }
    public function recuperaNome():string
    {
        return $this->nome;
    }

    // Regra de código: Todos os métodos são definidos com verbos no infinitivo.

    // Função interna, então é um método privado ou protegido 

    protected function validarNome($nomeNovoCadastro)
    {
        if(strlen($nomeNovoCadastro) < 5){
            echo "O nome do novo Titular precisa de pelo menos 5 caracteres.".PHP_EOL;
            exit;
        }
    }

}