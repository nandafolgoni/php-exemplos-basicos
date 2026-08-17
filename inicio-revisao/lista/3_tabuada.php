<?php
/*
    Exercício 3
    Tabuada (de 1 a 10) de um número específico
    usando a estrutura de repetição for
*/

$numero = 7; // número de teste - pode alterar aqui

echo "Tabuada do $numero:<br>";

for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado <br>";
}
?>