<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta chartset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <title>Listar clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <body>
        <h1>Lista de clientes</h1>
        <hr>

        <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome 😀</th>
      <th scope="col">E-mail 💌</th>
      <th scope="col">Celular 📞</th>
      <th scope="col">Ações ✌️</th> 
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Fulana</td>
      <td>fulana@email.com</td>
      <td>5521 9876-5432</td>
      <td>
        <a href="#" class="btn btn-sm btn-success"> Editar </a>
        <a href="#" class="btn btn-sm btn-danger"> Excluir</a>
    </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Beltrano</td>
      <td>beltrano@email.com</td>
      <td>5521 3216-5498</td>
      <td>
      <a href="#"> Editar✎</a>
        <a href="#"> Excluir✖</a>
    </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Cicrane</td>
      <td>5521 9638-5214</td>
      <td>
      <a href="#" class="btn btn-sm btn-success"><i class="bi bi-pencil-square"></i> Editar </a>
        <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i> Excluir </a>
    </td>
    </tr>
  </tbody>
</table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>