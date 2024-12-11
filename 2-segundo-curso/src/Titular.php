<?php

require_once 'Endereco.php';
class Titular {

    private string $cpf;
    private string $nome;
    private Endereco $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        $this->validarNome($nome);
        $this->cpf = $cpf;
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function getCpf():string
    {
        return $this->cpf;
    }
    public function getNome():string
    {
        return $this->nome;
    }

        // Regra de código: Todos os métodos são definidos com verbos no infinitivo.

    // Função interna, então é um método privado!! 

    private function validarNome($nomeNovoCadastro)
    {
        if(strlen($nomeNovoCadastro) < 5){
            echo "O nome do novo Titular precisa de pelo menos 5 caracteres.".PHP_EOL;
            exit;
        }
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }


}