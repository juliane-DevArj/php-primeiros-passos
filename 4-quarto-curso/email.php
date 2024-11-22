<?php
 
function geraEmail(string $nome):void
{
    // Isso se chama --> heredoc <-- Ajuda para não aparecer a identação feia, apenas a partir do ponto que vc colocou
    // o delimitador, que é a palavra FINAL nesse caso.

    $conteudo =<<<FINAL
    Olá $nome! 

    Estamos entrando em contato para te lembrar, da escala de domingo,
    
    você será professora no Terra Prometida!
    
    {assinatura}

    FINAL;

    echo $conteudo.PHP_EOL;
}

geraEmail("Juliane");

function geraEmail2():void
{
    // Isso se chama --> nowdoc <-- Ajuda para não aparecer a identação feia, apenas a partir do ponto que vc colocou
    // o delimitador, que é a palavra FINAL nesse caso. Ele vai tratar a var como STRING!!

    $conteudo2 =<<<'FINAL'
    Olá $nome2! 

    Estamos entrando em contato para te lembrar, da escala de domingo,
    
    você será professora no Terra Prometida!
    
    {assinatura}

    FINAL;

    echo $conteudo2;
}

geraEmail2();