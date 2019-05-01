<?php

print "\n Digite o preço do primeiro produto: R$";
$preço1 = (float) fgets (STDIN);

print "\n Digite o preço do segundo produto: R$";
$preço2 = (float) fgets (STDIN);

print "\n Digite o preço do terceiro produto: R$";
$preço3 = (float) fgets (STDIN);

if ($preço1 <=  $preço2 and $p1 <= $preço3) {
    print "\n Deve-se comprar o produto cujo o valor é: R$$p1 pois é o mais barato.\n";
}

elseif ($preço2 <=  $preço1 and $preço2 <= $preço3) {
    print "\n Deve-se comprar o produto cujo o valor é: R$$preço2 pois é o mais barato.\n";
}

elseif ($preço3 <=  $preço1 and $preço3 <= $preço2) {
    print "\n Deve-se comprar o produto cujo o valor é: R$$preço3 pois é o mais barato.\n";
}