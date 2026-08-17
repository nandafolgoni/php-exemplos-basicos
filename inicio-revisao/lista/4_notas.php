<?php

$notas = [7.5, 8.0, 5.5, 9.0, 6.5]; // vetor de teste

$soma  = 0;
$maior = $notas[0];
$menor = $notas[0];

foreach ($notas as $nota) {
    $soma += $nota;

    if ($nota > $maior) {
        $maior = $nota;
    }

    if ($nota < $menor) {
        $menor = $nota;
    }
}

$media = $soma / count($notas);

echo "Notas: " . implode(", ", $notas) . "<br>";
echo "Média da turma: " . number_format($media, 2, ',', '.') . "<br>";
echo "Maior nota: " . number_format($maior, 2, ',', '.') . "<br>";
echo "Menor nota: " . number_format($menor, 2, ',', '.') . "<br>";
?>