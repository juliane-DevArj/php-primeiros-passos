<?php

require_once 'Conta.php';

// Primeira instância de uma nova classe
$contaJu = new Conta();
$contaJu->defineNomeTitular('Juliane');
$contaJu->defineCpfTitular('472.769.808-04');

// Segunda instância de uma nova classe
$contaGabi= new Conta();
$contaGabi->defineNomeTitular('Gabriela');
$contaGabi->defineCpfTitular('472.769.438-74');


$contaJu->depositar(100);
$contaJu->transferir(50,$contaGabi);


echo "Nome do titular da primeira conta ". $contaJu->recuperaNomeTitular() .PHP_EOL;
echo "Nome do titular da segunda conta ".$contaGabi->recuperaNomeTitular().PHP_EOL;

echo "Cpf do titular da primeira conta ".$contaJu->recuperaCpfTitular().PHP_EOL;
echo "Cpf do titular da segunda conta ".$contaGabi->recuperaCpfTitular().PHP_EOL;
