<?php

//escreve na tela
echo '-----Calculadora PHP------' . PHP_EOL;
$numero1 = readline('Digite o primeiro número: ');
$numero2 = readline('Digite o segundo número: ');

//comandos: echo | print_r() | var_dump()
print_r ($numero1); // print_r escreve na tela qualquer tipo de variavel
var_dump ($numero1, $numero2); // consegue fazer um dump => mostrar valor e o tipo
echo PHP_EOL . ' RESULTADOS: ' . PHP_EOL;
echo 'A soma dos números é: ' . $numero1 + $numero2 . PHP_EOL;
echo 'A subtração dos números é: ' . $numero1 - $numero2 . PHP_EOL;
echo 'A multiplicação dos números é: ' . $numero1 * $numero2 . PHP_EOL;
echo 'A divisão dos números é: ' . $numero1 / $numero2 . PHP_EOL;
echo 'O resto da divisão dos números é: ' . $numero1 % $numero2 . PHP_EOL;