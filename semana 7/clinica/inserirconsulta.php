<?php


//include "conexao.php";
//$paciente = $_GET['paciente'];
//$especialidade = $_GET['especialidade'];
//$dataconsulta = $_GET['dataconsulta'];
//$horaconsulta = $_GET['horaconsulta'];


//$sql = "insert into tabelaconsulta (paciente, especialidade, dataconsulta, horaconsulta)
//values ('$paciente', '$especialidade', '$dataconsulta', '$horaconsulta')";


//$qry = mysqli_query($con,$sql);

//if ($qry) {
 //   header ('location: listarconsultastabela.php');
//} else {
//    echo "<h1>Registro não cadastrado</h1>";
//}



include "conexao.php";

$paciente = $_GET['paciente'];
$especialidade = $_GET['especialidade'];
$dataconsulta = $_GET['dataconsulta'];
$horaconsulta = $_GET['horaconsulta'];

$sql = "INSERT INTO tabelaconsulta (paciente, especialidade, dataconsulta, horaconsulta)
VALUES ('$paciente', '$especialidade', '$dataconsulta', '$horaconsulta')";

$qry = mysqli_query($con, $sql);

if ($qry) {
    header('location: listarconsultastabela.php');
} else {
    echo "<h1>Registro não cadastrado</h1>";
    var_dump(mysqli_error($con)); // Imprime o erro retornado pelo MySQL
}
