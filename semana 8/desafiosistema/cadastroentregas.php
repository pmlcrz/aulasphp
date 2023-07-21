<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de entrega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

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

<div class="container">
        <form action="listagementregas.php">
            <div class="row">
                <div class="col">
                <div class="mb-3">
   
       Remetente <input type="text" class="form-control" name="remetente"><br>
    </div>
    </div>
            <div class="col">
                <div class="mb-3">
        Pedido <input type="text"  class="form-control" name="codigoped"><br>
        </div>
    </div>
    <div class="col">
                <div class="mb-3">
        Hora do pedido <input type="date"  class="form-control" name="horaped"><br> 
        </div>
    </div>
    <div class="col">
                <div class="mb-3">
        Destinatário <input type="time"  class="form-control" name="destinatario"><br>
        </div>
        
    </div>
        <input class="btn btn-outline-info" type="submit" value="Cadastrar">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>