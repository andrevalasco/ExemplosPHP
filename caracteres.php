<?php

$nomeMinusculo = 'andre bueno valasco';
$nomeMaiusculo = 'ANDRE BUENO VALASCO';

echo strtoupper($nomeMinusculo) . PHP_EOL; //transforma letras em maiusculo
echo strtolower($nomeMaiusculo) . PHP_EOL; //transforma letras em maiusculo
echo ucwords($nomeMinusculo) . PHP_EOL; //transforma as primeiras letras em maiusculo

$frase = 'AMARELO,VERDE,VERMELHO,PRETO,ROXO';
$palavrasSeparadas = explode(',', $frase);

print_r($palavrasSeparadas);

$fraseSeparadaPorEspaço = implode(' ', $palavrasSeparadas);
echo $fraseSeparadaPorEspaço . "\n";

$frase2 = 'João está reprovando na disciplina de desenvolvimento de aplicações';
$fraseCorrigida = str_replace('reprovando', 'sendo aprovado', $frase2);
echo $fraseCorrigida;