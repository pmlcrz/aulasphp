<?php

//criar as variaveis que receber o conteudo da url
// cada variavel vai ter que pegar da url o conteudo
// $_GET/POST... = variavel global

include "conexao.php";
$aluno = $_GET['aluno'];
$turma = $_GET['turma'];
$mensalidade = $_GET['mensalidade'];
$datainicio = $_GET['datainicio'];

// echo "Bem vindo(a) {$aluno} sua turma é: e sua mensalidade: {$mensalidade} e suas aulas iniciam em: {$datainicio}";  

$sql = "insert into tabelaaluno (aluno, turma, mensalidade, datainicio)
values ('$aluno', '$turma', '$mensalidade', '$datainicio')";

// criar variavel para criar o comando sql

$qry = mysqli_query($con,$sql);

if ($qry) {
    header ('location: listaralunos2.php');
} else {
    echo "<h1>Registro não cadastrado</h1>";
}
