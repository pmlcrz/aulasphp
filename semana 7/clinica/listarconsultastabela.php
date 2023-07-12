<?php

include "conexao.php";
$sql = "select * from tabelaconsulta";
$qry = mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela listar alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>
<body>

    <?php 
    include "menuconsulta.php"; 
    ?> 


    <div class="container">

    <h1>Registro de consultas</h1>
    <a href="cadastro.php" class="btn btn-success"> Marcar consulta</a>
    <table class="table">
        <tr>
            <th>id</th>
            <th>Paciente</th>
            <th>Especialidade</th>
            <th>Data da consulta</th>
            <th>Hora da consulta</th>
            <th colspan=2>Ações</th>
        </tr>
        <?php
        
        while ($linha = mysqli_fetch_array($qry)) {
           $id = $linha ['id'];
           echo "<td>".$linha['id']."</td>";
           echo "<td>".$linha['paciente']."</td>";
           echo "<td>".$linha['especialidade']."</td>";
           echo "<td>".$linha['dataconsulta']."</td>";
           echo "<td>".$linha['horaconsulta']."</td>";
           echo "<td><a href='editar.php?id={$id}'>Editar</a></td>";
           echo "<td><a href='deletar.php?id={$id}'>Deletar</a></td>";
           echo "</tr>";
        }
        ?>
    
    </table>
    </div>
    
</body>
</html>