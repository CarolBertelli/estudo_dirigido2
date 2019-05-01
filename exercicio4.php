<?php

print "\n Digite uma letra: ";
$l = (string) fgetc (STDIN);

if ($l == 'a' or $l == 'e' or $l == 'i' or $l == 'o' or $l == 'u' or 
    $l == 'A' or $l == 'E' or $l== 'I' or $l == 'O' or $l == 'U' ) {
    
    print "\n A letra $l é vogal \n\n";
}

else {
    print "\n A letra $l é consoante \n\n";
}