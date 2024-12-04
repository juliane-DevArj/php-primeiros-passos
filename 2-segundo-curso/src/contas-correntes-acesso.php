<?php

require_once 'Conta.php';

// Primeira instância de uma nova classe
$contaJu = new Conta("472.769.808-04","Juliane Beda");
var_dump( $contaJu );

// Segunda instância de uma nova classe
$contaGabi= new Conta("472.769.438-79","Gabriela Beda");
var_dump( $contaGabi );

$contaJu->depositar(100);
$contaJu->transferir(50,$contaGabi);


echo "Nome do titular da primeira conta ". $contaJu->getNomeTitular() .PHP_EOL;
echo "Nome do titular da segunda conta ".$contaGabi->getNomeTitular().PHP_EOL;

echo "Cpf do titular da primeira conta ".$contaJu->getCpfTitular().PHP_EOL;
echo "Cpf do titular da segunda conta ".$contaGabi->getCpfTitular().PHP_EOL;
