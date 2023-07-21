<?php

include "conexao.php";

if(isset($_GET["id"])) {
    $id = $_GET["id"];

    if ($_SERVER["REQUEST_METHOD"])
    
    if ($_SERVER["REQUEST_METHOD"] === "POST") {

        $cliente = $_POST["cliente"];
        $datacadastro = $_POST["datacadastro"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];

        $conexao = mysqli_connect("localhost", "root", "", "acaizera");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "UPDATE clientes SET cliente = '$cliente', datacadastro = '$datacadastro', endereco = '$endereco', telefone = '$telefone' WHERE id = $id";
        if (mysqli_query($conexao, $query)) {
            echo "Cliente atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar cadastr: " . mysqli_error($conexao);
        }

        mysqli_close($conexao);
    } else {
        $conexao = mysqli_connect("localhost", "root", "", "acaizera");

        if (!$conexao) {
            die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
        }

        $query = "SELECT * FROM clientes WHERE id = $id";
        $result = mysqli_query($conexao, $query);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            ?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar clientes</title>
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

                $query = "SELECT * FROM clientes WHERE id = $id";
                $result = mysqli_query($conexao, $query);

                if (mysqli_num_rows($result) > 0) {
                    $row = mysqli_fetch_assoc($result);
                    ?>

                    <h1>Editar Entrega</h1>

                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"] . "?id=" . $id; ?>">
                        <div class="form-group">
                            <label for="cliente">Cliente:</label>
                            <input type="text" class="form-control" id="cliente" name="cliente" value="<?php echo $row['cliente']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="datacadastro">Data cadastro:</label>
                            <input type="date" class="form-control" id="datacadastro" name="datacadastro" value="<?php echo $row['datacadastro']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="endereco">Endereço:</label>
                            <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $row['endereco']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="telefone">Teleofne:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $row['telefone']; ?>" required>
                        </div>
                    
                        <button type="submit" class="btn btn-primary">Editar</button>
                    </form>

                    <?php
                } else {
                    echo "Nenhum cliente encontrado com o ID fornecido.";
                }

                
            }
        } else {
            echo "ID do cliente não fornecido.";
        }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



            <?php
        } else {
            echo "Nenhum cliente encontrado com o ID fornecido.";
        }

        mysqli_close($conexao);
    }
} else {
    echo "ID do cliente não fornecido.";
}

?>