<?php
//Desenvolva em PHP, primeiro no papel e depois teste no computador.
//1) desenvolva o trecho de um algoritmo que percorra todos os números múltiplos de 3 e 7, utilize algum laço de repetição.
//2) desenvolva um trecho de um algoritmo que consiga ordenar em ordem decrescente 4 números.

$num1 = 4;
$num2 = 1;
$num3 = 5;

$menor . $meio . $maior;
if ($n1 < $n2 && $n1 < $n3) {
    $menor = $n1;
    if ($n2 < $n3) {
        $meio = $n2;
        $maior = $n3;
    }else {
        $meio = $n3;
        $maior = $n2;
    }
} else if ($n2 < $n1 && $n2 < $n3) {
    $menor = $n2;
    if ($n1 < $n3) {
        $meio = $n1;
        $maior = $n3;
    } else {
        $menor = $n3;
        if ($n1 < $n2) {
            $meio = $n1;
            $maior = $n2;
        } else {
            $meio = $n2;
            $maior = $n1;
        }
}


}
echo $maior . $meio . $menor;