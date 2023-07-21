<?php
include 'conexao.php';

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $remetente = $_POST["remetente"];
        $codigoped = $_POST["codigoped"];
        $horaped = $_POST["horaped"];
        $destinatario = $_POST["destinatario"];
        $statusentrega = $_POST["statusentrega"];

        $conexao = mysqli_connect("localhost", "root", "", "acaizera");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "UPDATE entregas SET remetente = '$remetente', codigoped = '$codigoped', horaped = '$horaped', destinatario = '$destinatario', statusentrega = '$statusentrega' WHERE id = $id";
        if (mysqli_query($conexao, $query)) {
            echo "Atualizada com sucesso!";
        } else {
            echo "Erro ao atualizar a entrega: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
    } else {
        $conexao = mysqli_connect("localhost", "root", "", "acaizera");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM entregas WHERE id = $id";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
        include 'conexao.php';

        if (isset($_GET["id"])) {
            $id = $_GET["id"];

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
            } else {
                $conexao = mysqli_connect("localhost", "root", "", "acaizera");

                if (!$conexao) {
                    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
                }

                $query = "SELECT * FROM entregas WHERE id = $id";
                $result = mysqli_query($conexao, $query);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    ?>

                    <h1>Editar Entrega</h1>

                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" . $id; ?>">
                        <div class="form-group">
                            <label for="remetente">Remetente:</label>
                            <input type="text" class="form-control" id="remetente" name="remetente" value="<?php echo $row['remetente']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="codigoped">Código do Pedido:</label>
                            <input type="text" class="form-control" id="codigoped" name="codigoped" value="<?php echo $row['codigoped']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="horaped">Hora do Pedido:</label>
                            <input type="time" class="form-control" id="horaped" name="horaped" value="<?php echo $row['horaped']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="destinatario">Destinatário:</label>
                            <input type="text" class="form-control" id="destinatario" name="destinatario" value="<?php echo $row['destinatario']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="statusentrega">Status da Entrega:</label>
                            <input type="text" class="form-control" id="statusentrega" name="statusentrega" value="<?php echo $row['statusentrega']; ?>" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>

                    <?php
                } else {
                    echo "Nenhuma entrega encontrada com o ID fornecido.";
                }

                
            }
        } else {
            echo "ID da entrega não fornecido.";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



            <?php
        } else {
            echo "Nenhuma entrega encontrada com o ID fornecido.";
        }

        mysqli_close($conexao);
    }
} else {
    echo "ID da entrega não fornecido.";
}
?>
