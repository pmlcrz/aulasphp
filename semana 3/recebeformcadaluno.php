<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matricula = $_POST["matricula"];
    $nome = $_POST["nome"];
    $pai = $_POST["pai"];
    $mae = $_POST["mae"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $data_nascimento = $_POST["data_nascimento"];
    $genero = $_POST["genero"];
}
    
    echo "Aluno cadastrado com sucesso:<br>";
    echo "ID de Matrícula: " . $matricula . "<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Nome do Pai: " . $pai . "<br>";
    echo "Nome da Mãe: " . $mae . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Telefone: " . $telefone . "<br>";
    echo "Data de Nascimento: " . $data_nascimento . "<br>";
    echo "Gênero: " . $genero . "<br>";


