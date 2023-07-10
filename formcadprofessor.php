<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    
    <?php
    include "menu.php";
    ?>

    <div class="container">
      <form action="">
        <div class="row">

        <div class="col"> 
          Professor  <input type="text" class="form-control">
        </div>

        <div class="col">
          Disciplina <input type="text" class="form-control">
          <div>

        <div class="col">
          Turno <input type="text" class="form-control">
        </div>

        <div class="col">
          Titulação <input type="text" class="form-control">
        </div>
    </div>
  
      <div class="row">
        <div class="col">
          Hora-Aula <input type="text" class="form-control">
      </div>

      <div class="col">
          Indicação <input type="text" class="form-control">
      </div>    

      <input type="submit" class="btn btn-info" value="Cadastrar">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>