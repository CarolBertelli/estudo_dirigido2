<?php

print "\n Digite o seu sexo ([F] ou [M]): ";
$sexo = (string) fgetc (STDIN);

if ($sexo == 'M') {
    print "\n $sexo  Masculino. \n\n";
}

elseif ($sexo == 'F') {
    print "\n $sexo  Feminino. \n\n";
}

else {
    print " \n Sexo Inválido \n\n";
}