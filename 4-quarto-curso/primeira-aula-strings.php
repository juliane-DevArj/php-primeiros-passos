<?php

$nomeLista =[
    "nome"=> "Juliane",
    "sobrenome"=>"Corrêa",
];
 
// String Contains
$ehDaFamilia = str_contains($nomeLista['sobrenome'],"Beda");

if ($ehDaFamilia) {
    echo "{$nomeLista['sobrenome']} é um nome da minha família!, seu nome completo é {$nomeLista['nome']} {$nomeLista['sobrenome']}";
}
else{
    echo "{$nomeLista['nome']} {$nomeLista['sobrenome']} não é da minha família!";
}

