<?php

$alunos2023 = [
    "Juliane",
    "Laura" ,
    "Regina",
    "Regina George",
    "Janice",
    "João"
];

$novosAlunos = [
    "Natan",
    "Levi" ,
    "Rúbens",
    "Roberta",
    "João"
];

// Vou unificar os dois arrays
$alunos2024 = array_merge($alunos2023,$novosAlunos);
var_dump($alunos2024); 

$alunosx = [
    "Julia",
    "Felipe" ,
    "Ana",
    "George",
    "Leonardo",
];

$novosAlunos25 = [
    "Natalia",
    "Lucas" ,
    "Rute",
    "Renne",
    "João",
];


$alunos2025 = $alunosx + $novosAlunos25;
var_dump($alunos2025);

