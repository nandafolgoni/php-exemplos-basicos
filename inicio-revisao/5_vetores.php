<?php

// Vetor (array simples "1 linha")
$frutas = ["Maça", "Banana", "Uva"];

// Exibindo os valores com laço
foreach ($frutas as $indice => $fruta) {
    echo "Posição $indice: $fruta <br>";
}

// Array (Linhas e colunas)

$matriz = [
    ["Max Verstappen", "Oscar Piatri", "Lando Norris"],
    ["Charles Lecrerc", "Lewis Hamilton", "George Russel"],
    ["Fernando Alonso", "Carlos Sainz", "Gabriel Bortoleto"]
];

echo "<br><br>";
echo "Lista de Pilotos de F1 (Dica: O 1º é o melhor.)
<br><br>";

// Exibindo os valores de matriz
foreach ($matriz as $linha) {
    foreach ($linha as $piloto) {
        echo $piloto . " | ";
    }
    echo "<br>";
}