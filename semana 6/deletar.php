<?php

include "conexao2.php";

$id = $_GET['id'];
$sql = "delete from tabelaaluno where id=".$id;

mysqli_query($con, $sql);
header('location:listaralunostabela.php');