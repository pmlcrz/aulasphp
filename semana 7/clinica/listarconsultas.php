<?php
include "conexao.php";
$sql = "select * from tabelaconsulta";
$qry = mysqli_query($con,$sql); 
var_dump($qry);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar consultas</title>
</head>
<body>

    <h1>Listagem de consultas</h2>
        <hr>
        <?php
        while ($linha = mysqli_fetch_array($qry)){
            
            echo $linha['id']."<br>";
            echo $linha['paciente']."<br>";
            echo $linha['especialidade']."<br>";
            echo $linha['dataconsulta']."<br>";
            echo $linha['horaconsulta']."<br>";
        }
        ?>
</body>
</html>