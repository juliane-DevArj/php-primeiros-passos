<?php


$array1= [
    0 => "Natan",
    1 => "Lis",
    2 => "Robert"
];

// Quero verificar se isso aqui é uma lista( conforme índices que podem ser utilizados no laço for)

$array = [
    "nome" => null,
    "nome1" => "Lis",
    "nome2" => "Robert"
];
var_dump($array);


// Var dump retorna o conteúdo da variável 

var_dump(array_is_list( $array1 ));
var_dump(array_is_list( $array ));
var_dump(isset($array['nome']) );

foreach( $array as $chave => $valor ) {
        

    if(isset($valor)){
        echo "Seu nome é $valor".PHP_EOL;
    }
    else{
        echo "Você nao tem nome ".PHP_EOL;
    };



   // array_key_exist = verifica se a chave existe;
   // in_array = verifica se o valor existe;
   // isset = verifica se o valor existe e não é nulo;
};

