<?php

$precoProduto = 45.90; // valor de teste - pode alterar aqui
$quantidade   = 5;     // valor de teste - pode alterar aqui

$valorTotal = $precoProduto * $quantidade;

if ($valorTotal >= 200.00) {
    $desconto   = $valorTotal * 0.10;
    $valorFinal = $valorTotal - $desconto;

    echo "Preço unitário: R$ " . number_format($precoProduto, 2, ',', '.') . "<br>";
    echo "Quantidade: $quantidade <br>";
    echo "Valor total: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "Desconto de 10%: R$ " . number_format($desconto, 2, ',', '.') . "<br>";
    echo "Valor final com desconto: R$ " . number_format($valorFinal, 2, ',', '.') . "<br>";
} else {
    echo "Preço unitário: R$ " . number_format($precoProduto, 2, ',', '.') . "<br>";
    echo "Quantidade: $quantidade <br>";
    echo "Valor total: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
    echo "Compra não atingiu R$ 200,00. Sem desconto.<br>";
    echo "Valor final: R$ " . number_format($valorTotal, 2, ',', '.') . "<br>";
}
?>