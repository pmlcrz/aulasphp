<?php
include "conexao.php";
$sql = "select * from tabelaaluno";
$qry = mysqli_query($con,$sql); //executa o select na conexão
var_dump($qry);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listagem de alunos</h2>
        <hr>
        <?php
        while ($linha = mysqli_fetch_array($qry)){
            // qry alimentando o mysqli para gerar o que está na variavel linha
            $id = $linha['id'];
            echo $linha['id']."<br>";
            echo "Aluno:" .$linha['aluno']."<br>";
            echo "Turma:" .$linha['turma']."<br>";
            echo "Mensalidade:" .$linha['mensalidade']."<br>";
            echo "datainicio:" .$linha['datainicio']."<br>";
            echo "<a href='editar.php?id={$id}'>Editar</a>"; //O ? diz que haverá mais informmaçoes
            echo "<hr>";

        }
        ?>
</body>
</html>