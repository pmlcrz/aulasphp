<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro de Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body>

<div class="container">
  
<a href="menu.php" class="btn btn-sm btn-info"> << Voltar</a>

    <h2>Formulário de Cadastro de <u>Clientes</u></h2>
<hr>
    <form method="post" action="processar.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" required><br><br>

        <label for="telefone">CPF:</label>
        <input type="text" id="telefone" name="telefone" class="form-control" required><br><br> 

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required><br><br>

        <label for="telefone">Endereço:</label>
        <input type="text" id="telefone" name="telefone" class="form-control" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" class="form-control" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required><br><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero" required>
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
            <option value="feminino">Prefiro não informar</option>
        </select><br><br>

        <button type="submit" value="Cadastrar" class="btn btn-dark">Cadastrar</button>
    </form>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</div>

</body>
</html>
