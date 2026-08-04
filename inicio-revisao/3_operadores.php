<?php

// Declaração das variáveis
$idade = 19;
$temDocumento = true;

// Condicional com operador (E)
if ($idade >=18 && $temDocumento) {
    echo "Pode tirar carteira";
} else {
    echo "Não pode tirar a carteira";
}

// Declaração das variáveis
$feriado = false;
$fimDeSemana = true;

// Condicional com operador (OU)
if ($feriado || $fimDeSemana) {
    echo "\nHoje não tem aula";
} else {
    echo "\nNão é feriado";
}