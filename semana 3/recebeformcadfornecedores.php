<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    $produto = $_POST["produto"];
    $nota_fiscal = $_POST["nota_fiscal"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];

    
    echo "Fornecedor cadastrado com sucesso:<br>";
    echo "Nome do Fornecedor: " . $nome . "<br>";
    echo "ID do Produto: " . $produto . "<br>";
    echo "Número da Nota Fiscal: " . $nota_fiscal . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telefone: " . $telefone . "<br>";
}

