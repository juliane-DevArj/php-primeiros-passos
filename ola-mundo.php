<?php

for($contador =1; $contador <= 15; $contador++)
{

    if($contador == 13){
        // Pule esse e continue a iteração
        break;
    }
    // EOL significa End of line
    echo "#$contador". PHP_EOL;
} 