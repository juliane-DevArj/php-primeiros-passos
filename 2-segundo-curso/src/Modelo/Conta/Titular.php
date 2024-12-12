<?php

namespace Modelo\Conta;

require_once __DIR__ . '/../Pessoa.php';
require_once __DIR__ .'/../Endereco.php';

use Modelo\Pessoa; 
use Modelo\Endereco; 
//------------------------------- ACIMA -- > REFERENCIA DE LOCAIS DE ARQUIVOS

//Titular "é uma" pessoa! Relação: HERANÇA
class Titular extends Pessoa {
    //Titular "tem um" endereço! Relação: COMPOSIÇÃO
    private Endereco $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    // Sou obrigada a recuperar o endereço de novo!
    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }


}