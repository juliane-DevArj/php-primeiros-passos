<?php

/* Executar um programa que exiba, na tela do usuário, todos os números ímpares de 0 à 100 */
$i = 0;

while($i <= 100){
    if($i % 2 != 0){
        echo "$i é ímpar". PHP_EOL;
    }
    $i++;
}

for($contadorPar = 0; $contadorPar <=100; $contadorPar++){
    
    if($contadorPar % 2 == 0){
        echo "$contadorPar é par". PHP_EOL;
    }
}


    