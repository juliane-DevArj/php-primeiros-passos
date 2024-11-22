<?php

$translate = ["hello" => "hi", "hi" => "hello"];
echo strtr(
    "hi all, I said hello", $translate
).PHP_EOL;

// Agora um segundo exemplo de saída, acontece que aqui ele vai substituir por cima,
// não importa se já havia substituido antes

$frase = "hi all, I said hello";

echo str_replace(
    ['hello', 'hi'], ['hi','hello'], $frase
).PHP_EOL;