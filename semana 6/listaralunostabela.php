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
</head>
<body>
    <h1>Deletar registros</h1>
    <a href="formcadaluno.php"> Novo cadastro</a>
    <table border="1px">
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
           echo "<td>".$linha['id']."</td>";
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
</body>
</html>