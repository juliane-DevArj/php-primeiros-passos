<?php

$telefones = ['(12) 99753 - 3930, (12) 98702 - 2565, (24) 2222 - 2222'];

foreach($telefones as $telefone){
    
    if ($telefoneValido){
        echo "Telefone válido".PHP_EOL;
    }
    else{
        echo "Telefone inválido".PHP_EOL;
    }

}