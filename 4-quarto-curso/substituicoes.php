<?php

$texto = 'Texto com qualquer coisa palavrão e caramba';
echo str_replace
(
    // Substitua ISSO -->
    ['palavrão','caramba'],
    // Por ISSO -->
    ['p***','c***'],
    $texto
)   . PHP_EOL;


echo strtr
(
    // Ela substitui literalmente caracteres!!
    $texto,'poxa',"***@"
)   .PHP_EOL;

echo strtr
(
    // Ela substitui literalmente caracteres!! Chave é o que eu selecionei
    // Valor é a substituição que quero realizar!! 
    $texto,['palavrão' => 'p**', 'caramba' => 'c**']
)  .PHP_EOL;