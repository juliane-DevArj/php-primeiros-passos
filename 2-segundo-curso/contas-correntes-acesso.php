<?php

require_once 'src/Modelo/Pessoa.php';
require_once 'src/Modelo/Endereco.php';
require_once 'src/Modelo/Conta/Titular.php';
require_once 'src/Modelo/Funcionario.php';
require_once 'src/Modelo/Conta/Conta.php';

use Modelo\Endereco;
use Modelo\Conta\Titular;
use Modelo\Funcionario;
use Modelo\Conta\Conta;

// Primeira instância de uma nova classe
$enderecoJu = new Endereco("São José dos Campos","Thunder Garden","Egle Carnevali","285");
$titularJu= new Titular("472.769.808-04","Juliane Beda",$enderecoJu);
$contaJu = new Conta($titularJu);

// Segunda instância de uma nova classe
$enderecoGabi = new Endereco("São José dos Campos","Thunder Garden","Egle Carnevali","285");
$titularGabi= new Titular("472.769.438-79","Gabriela Beda",$enderecoGabi);
$contaGabi = new Conta($titularGabi);

$contaJu->depositar(100);
$contaJu->transferir(50,$contaGabi);


echo "Nome do titular da primeira conta ". $contaJu->recuperaNome() .PHP_EOL;
echo "Nome do titular da segunda conta ".$contaGabi->recuperaNome().PHP_EOL;

echo "Cpf do titular da primeira conta ".$contaJu->recuperaCpf().PHP_EOL;
echo "Cpf do titular da segunda conta ".$contaGabi->recuperaCpf().PHP_EOL; 


$funcionario = new Funcionario("123.456.789-00", "Juliane Beda", "Desenvolvedora");
echo $funcionario->recuperaCargo().PHP_EOL; // Deve exibir "Desenvolvedora"
