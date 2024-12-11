<?php

require_once 'Endereco.php';
require_once 'Titular.php';
require_once 'Conta.php';


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


echo "Nome do titular da primeira conta ". $contaJu->getNome() .PHP_EOL;
echo "Nome do titular da segunda conta ".$contaGabi->getNome().PHP_EOL;

echo "Cpf do titular da primeira conta ".$contaJu->getCpf().PHP_EOL;
echo "Cpf do titular da segunda conta ".$contaGabi->getCpf().PHP_EOL; 

//echo "Quantidade de objetos Conta criados". Conta::$getquantidadeContasClasse().PHP_EOL;