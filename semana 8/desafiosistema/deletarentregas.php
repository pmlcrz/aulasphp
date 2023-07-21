<?php

include "conexao.php";


if (isset($_GET['id'])) {
  $id = $_GET['id'];

  
  $sql = "DELETE FROM entregas WHERE id = $id";

  if (mysqli_query($conexao, $sql)) {
    header('Location: listaentregas.php');
    exit();
  } else {
    echo "Erro ao executar a consulta: " . mysqli_error($con);
  }
} else {
  echo "ID não especificado na URL.";
}
