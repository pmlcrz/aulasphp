<?php

include "conexao2.php";
$sql = "select * from tabelaaluno";
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
    include "menu.php"; 
    ?> 


    <div class="container">

    <h1>Registros</h1>
    <a href="formcadaluno.php" class="btn btn-success"> Novo cadastro</a>
    <table class="table">
        <tr>
            <th>id</th>
            <th>Aluno</th>
            <th>Turma</th>
            <th>Mensalidade</th>
            <th>Data de nício</th>
            <th colspan=2>Ações</th>
        </tr>
        <?php
        
        while ($linha = mysqli_fetch_array($qry)) {
           $id = $linha ['id'];
           echo "<td>".$linha['id']."</t d>";
           echo "<td>".$linha['aluno']."</td>";
           echo "<td>".$linha['turma']."</td>";
           echo "<td>".$linha['mensalidade']."</td>";
           echo "<td>".$linha['datainicio']."</td>";
           echo "<td><a href='editar.php?id={$id}'>Editar</a></td>";
           echo "<td><a href='deletar.php?id={$id}'>Deletar</a></td>";
           echo "</tr>";
        }
        ?>
    
    </table>
    </div>
    
</body>
</html>