<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="inseriraluno.php">
            <div class="row">
                <div class="col">
                <div class="mb-3">
   
        Aluno               <input type="text" class="form-control" name="aluno"><br>
    </div>
    </div>
            <div class="col">
                <div class="mb-3">
        Turma               <input type="text"  class="form-control" name="turma"><br>
        </div>
    </div>
    <div class="col">
                <div class="mb-3">
        Mensalidade         <input type="text"  class="form-control" name="mensalidade"><br> 
        </div>
    </div>
    <div class="col">
                <div class="mb-3">
        Data de início      <input type="date"  class="form-control" name="datainicio"><br>
        </div>
    </div>
        <input class="btn btn-info" type="submit" value="Cadastrar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>