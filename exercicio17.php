<?php

print "\n Digite a base: ";
$b = (float) fgets (STDIN);

print "\n Digite o expoente: ";
$expoente = (float) fgets (STDIN);

$base1 = $b;
$contador = 1;

if ($expoente == 0){
    print "\n $b ^ $expoente = 1 \n \n";
}

else {

    while ($contador < $expoente) {
        $base1 = $base1 * $b;
    
        $contador = $contador + 1;
    }

    print "\n  $b ^ $expoente = $base1 \n \n";
}