<?php

$notasBimestre1 = [
    "Juliane" => 10,
    "Laura" => 8,
    "Regina" => 7,
    "Regina George" => 7,
    "Janice" => 3,
    "João" => 4

];

$notasBimestre2 = [
    "Juliane" => 10,
    "Laura" => 1,
    "Regina" => 7,
    "Janice" => 5,
    "João" => 5

];

// Diferença entre arrays

// Retorna todos os elementos do PRIMEIRO ARRAY ($notasBimestre1), que NÃO ESTÃO no ARRAY 2 ($notasBimestre2)

// Leva em consideração apenas valores!!
var_dump(array_diff($notasBimestre1,$notasBimestre2)). PHP_EOL;
echo "Troca de instrução".PHP_EOL;

// Leva em consideração apenas chaves!!
var_dump(array_diff_key($notasBimestre1,$notasBimestre2)). PHP_EOL;
echo "Troca de instrução".PHP_EOL;

//  Leva em consideração chaves e valores!!
var_dump(array_diff_assoc($notasBimestre1,$notasBimestre2)). PHP_EOL;
echo "Troca de instrução".PHP_EOL;

$alunosFaltantes = array_diff_key($notasBimestre1,$notasBimestre2);
echo "Troca de instrução".PHP_EOL;

// Eu quero saber apenas as chaves(NOMES), dos alunos que faltaram!

// Nesse caso, no segundo bimestre só faltou a Regina George!
var_dump(array_keys($alunosFaltantes));
var_dump(array_values($alunosFaltantes));
echo "Troca de instrução".PHP_EOL;
// Agora vou transformar o nome em VALUE
// E vou transformar a nota em INDEX

$nomesAlunos = array_keys($nomesAlunos);
$notasAlunos = array_values($notasAlunos);

var_dump(array_combine($notasAlunos, $nomesAlunos));
echo "Fim de instrução".PHP_EOL;