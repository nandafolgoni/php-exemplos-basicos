<?php
/*
    Exercício 2
    Verificação de aprovação de aluno:
    - Média maior ou igual a 6,0
    - Faltas menores ou iguais a 15
    Usando o operador lógico &&
*/

$media = 7.5;   // valor de teste
$faltas = 10;   // valor de teste

if ($media >= 6.0 && $faltas <= 15) {
    echo "Média: $media | Faltas: $faltas <br>";
    echo "Situação: APROVADO<br>";
} else {
    echo "Média: $media | Faltas: $faltas <br>";
    echo "Situação: REPROVADO<br>";
}
?>