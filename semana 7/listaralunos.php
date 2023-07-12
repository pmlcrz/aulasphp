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
            // enquanto ($isso = que estiver aqui(que sai daqui))
            echo $linha['id']."<br>";
            echo $linha['aluno']."<br>";
            echo $linha['turma']."<br>";
            echo $linha['mensalidade']."<br>";
            echo $linha['datainicio']."<br>";
        }
        ?>
</body>
</html>