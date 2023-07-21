<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>Busca de Entrega</title>
</head>
<body>
    <h1>Busca de Entrega</h1>

    <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        ID da Entrega: <input type="text" name="id" required><br>
        <input type="submit" class="btn btn-outline-success" value="Buscar entrega">
    </form>

    <?php
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $conexao = mysqli_connect("localhost", "root", "", "acaizera");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM entregas WHERE id = $id";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "ID: " . $row["id"] . "<br>";
            echo "Remetente: " . $row["remetente"] . "<br>";
            echo "Código do Pedido: " . $row["codigoped"] . "<br>";
            echo "Hora do Pedido: " . $row["horaped"] . "<br>";
            echo "Destinatário: " . $row["destinatario"] . "<br>";
            echo "Status: " . $row["statusentrega"] . "<br>";
        } else {
            echo "Nenhuma entrega encontrada com o ID fornecido.";
        }

        mysqli_close($conexao);
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>