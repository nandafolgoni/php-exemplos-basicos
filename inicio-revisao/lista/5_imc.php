<?php

function calcularIMC($peso, $altura) {
    $imc = $peso / ($altura * $altura);
    return round($imc, 2);
}

// Programa principal - valores de teste
$peso   = 70;   // kg
$altura = 1.75; // metros

$imc = calcularIMC($peso, $altura);

echo "Peso: {$peso} kg | Altura: {$altura} m <br>";
echo "IMC calculado: $imc <br>";

if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif ($imc < 25) {
    $classificacao = "Peso normal";
} elseif ($imc < 30) {
    $classificacao = "Sobrepeso";
} else {
    $classificacao = "Obesidade";
}

echo "Classificação: $classificacao <br>";
?>