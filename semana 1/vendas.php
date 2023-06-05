<?php
$produto = "notebook";
$estoque = 10;
$estMax = 15;
$estMin = 3;

$venda = 4;

if ($estoque>=$venda) {
   $estoque = $estoque - $venda;
} else {
    echo "Estoque insuficiente";
}

echo "Estoque atual: $estoque";