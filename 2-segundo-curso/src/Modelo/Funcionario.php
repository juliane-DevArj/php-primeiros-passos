<?php

namespace Modelo;

class Funcionario extends Pessoa{
    private string $cargo;

    public function __construct(string $cpf, string $nome, string $cargo)
    {
        parent::__construct($cpf, $nome);
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
}