<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcação de consultas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form action="inserirconsulta.php">
            <div class="row">
                <div class="col">
                <div class="mb-3">
   
        Paciente               <input type="text" class="form-control" name="paciente"><br>
    </div>
    </div>
            <div class="col">
                <div class="mb-3">
        Especialidade              <input type="text"  class="form-control" name="especialidade"><br>
        </div>
    </div>
    <div class="col">
                <div class="mb-3">
        Data consulta         <input type="date"  class="form-control" name="dataconsulta"><br> 
        </div>
    </div>
    <div class="col">
                <div class="mb-3">
        Hora consulta     <input type="time"  class="form-control" name="horaconsulta"><br>
        </div>
    </div>
        <input class="btn btn-outline-info" type="submit" value="Cadastrar">
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>