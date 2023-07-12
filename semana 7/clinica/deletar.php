
<?php

include "conexao.php";


if (isset($_GET['id'])) {
  $id = $_GET['id'];

  
  $sql = "DELETE FROM tabelaconsulta WHERE id = $id";

  if (mysqli_query($con, $sql)) {
    header('Location: listarconsultastabela.php');
    exit();
  } else {
    echo "Erro ao executar a consulta: " . mysqli_error($con);
  }
} else {
  echo "ID não especificado na URL.";
}
