<?php

print "\n Digite o primeiro número: ";
$n1 = (float) fgets (STDIN);

print "\n Digite o segundo número: ";
$n2 = (float) fgets (STDIN);

print "\n Digite o terceiro número: ";
$n3 = (float) fgets (STDIN);

if ($n1 >  $n2 and $n1 > $n3) {
    print "\n $n1 é o maior numero \n\n";
}


elseif ($n2 >  $n1 and $n2 > $n3) {
    print "\n  $n2 é o maior numero \n";
}


elseif ($n3 >  $n1 and $n3 > $n2) {
    print "\n $n3 é o maior numero \n\n";
}

else{
    print "\n Dois ou mais números são iguais. \n\n";
}