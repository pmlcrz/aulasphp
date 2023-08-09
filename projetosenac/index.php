<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade aula 09-08-2023</title>
</head>
<body>
    <a href="inserir.php">Inserir</a>
</body>
</html>



<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade aula 09-08-2023</title>
</head>
<body>
    
    /*
        require ('./inc/Config.inc.php');
        //require ('./class/Conn.class.php');

        // criar um objeto que vai estabelecer uma nova conexao
        $conn = new Conn();
        $conn->getConn();

        $aluno = "Maria da Silva";
        $turma = 2001;
        $mensalidade = 500.00;
        $datainicio	= '2023-10-10';
        try {
            $cadastro = "insert into tabelaaluno (aluno, turma, mensalidade, datainicio) values (:aluno, :turma, :mensalidade, :datainicio)";
            
            $resultado = $conn->getConn()->prepare($sql);

            $resultado->bindParam(':aluno', $aluno, PDO::PARAM_STR);
            $resultado->bindParam(':turma', $turma, PDO::PARAM_STR);
            $resultado->bindParam(':mensalidade', $mensalidade, PDO::PARAM_FLOAT);
            $resultado->bindParam(':datainicio', $datainicio, PDO::PARAM_INT);
        
            $resultado->execute();
            if($resultado->rowCount());
            echo "Cadastrado com sucesso";
            endif;
        } catch (Exception $e) {
                echo "Mensagem: ". $e->getMessage();
        }

        ?>
</body>
</html>