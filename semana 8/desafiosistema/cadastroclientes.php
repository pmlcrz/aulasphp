<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Cadastro de entrega</title>
</head>
<body>
    <h1>Cadastro entrega</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $remetente = $_POST["remetente"];
        $codigoped = $_POST["codigoped"];
        $horaped = $_POST["horaped"];
        $destinatario = $_POST["destinatario"];

        $conexao = mysqli_connect("localhost", "root", "", "acaizera");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "INSERT INTO entregas (remetente, codigoped, horaped, destinatario, statusentrega) VALUES ('$remetente', '$codigoped', '$horaped', '$destinatario', 'Pendente')";
        if (mysqli_query($conexao, $query)) {
            echo "Entrega cadastrada com sucesso!";
        } else {
            echo "Erro ao cadastrar a entrega: " . mysqli_error($conexao);
        }

        $query = "SELECT * FROM entregas";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Lista de Entregas</h2>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "ID: " . $row["id"] . "<br>";
                echo "Remetente: " . $row["remetente"] . "<br>";
                echo "Código do Pedido: " . $row["codigoped"] . "<br>";
                echo "Hora do Pedido: " . $row["horaped"] . "<br>";
                echo "Destinatário: " . $row["destinatario"] . "<br>";
                echo "Status: " . $row["statusentrega"] . "<br>";
                echo "<hr>";
            }
        } else {
            echo "Nenhuma entrega cadastrada.";
        }

        mysqli_close($conexao);
    }
    ?>

    <div>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-group">
                <label for="remetente">Remetente:</label>
                <input type="text" class="form-control" name="remetente" required>
            </div>
            <div class="form-group">
                <label for="codigoped">Código do Pedido:</label>
                <input type="text" class="form-control" name="codigoped" required>
            </div>
            <div class="form-group">
                <label for="horaped">Hora do Pedido:</label>
                <input type="time" class="form-control" name="horaped" required>
            </div>
            <div class="form-group">
                <label for="destinatario">Destinatário:</label>
                <input type="text" class="form-control" name="destinatario" required>
            </div>
            <input type="submit" class="btn btn-outline-warning" value="Cadastrar">
        </form>

        <?php
        ?>

    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>