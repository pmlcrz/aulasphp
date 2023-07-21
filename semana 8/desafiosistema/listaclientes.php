<?php
include "conexao.php";

$sql = "select * from clientes";
$qry = mysqli_query($conexao, $sql);

if (!$qry) {
    die("Erro na consulta: " . mysqli_error($conexao));
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">

    <h1>Clientes</h1>
    <a href="cadastroclientes.php" class="btn btn-primary">Registrar clientes</a>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>Cliente</th>
            <th>Data de cadastro</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th colspan=2>Ações</th>
        </tr>
        <?php
        while ($linha = mysqli_fetch_array($qry)) {
           $id = $linha['id'];
           echo "<tr>";
           echo "<td>".$linha['id']."</td>";
           echo "<td>".$linha['cliente']."</td>";
           echo "<td>".$linha['datacadastro']."</td>";
           echo "<td>".$linha['endereco']."</td>";
           echo "<td>".$linha['telefone']."</td>";
           echo "<td><a href='editarclientes.php?id={$id}' class='btn btn-info'>Editar</a></td>";
           echo "<td><a href='deletarclientes.php?id={$id}' class='btn btn-danger'>Deletar</a></td>";
           echo "</tr>";
        }
        ?>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
