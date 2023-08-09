<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade aula 09-08-2023</title>
</head>
<body>
    <?php
        require('./inc/Config.inc.php');

        // Criar um objeto para estabelecer uma nova conexão
        $conn = new Conn();
        $conexao = $conn->getConn();

        $aluno = "Thomas Costa";
        $turma = 1003;
        $mensalidade = 400.00;
        $datainicio = '2023-10-10';

        try {
            $cadastro = "INSERT INTO tabelaaluno (aluno, turma, mensalidade, datainicio) VALUES (:aluno, :turma, :mensalidade, :datainicio)";
            
            $resultado = $conexao->prepare($cadastro);

            $resultado->bindParam(':aluno', $aluno, PDO::PARAM_STR);
            $resultado->bindParam(':turma', $turma, PDO::PARAM_INT);
            $resultado->bindParam(':mensalidade', $mensalidade, PDO::PARAM_STR);
            $resultado->bindParam(':datainicio', $datainicio, PDO::PARAM_STR);
        
            $resultado->execute();
            
            if ($resultado->rowCount()) {
                echo "Cadastrado com sucesso";
            }
        } catch (Exception $e) {
            echo "Mensagem: " . $e->getMessage();
        }
    ?>
</body>
</html>
