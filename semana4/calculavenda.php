<?php

$prod = $_GET['prod']; //variavel global
$preco = $_GET['preco'];
$qtd = $_GET['qtd'];

echo "Produto selecionado: $prod <br>";
echo "Valor unitário: $preco <br>";
echo "Quantidade: $qtd<br>";
echo "Valor total da venda R$:".$preco * $qtd;