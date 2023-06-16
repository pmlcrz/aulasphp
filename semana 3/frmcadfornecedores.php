<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro de Fornecedores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">


   
</head>
<body>

<div class="container">
    
<a href="menu.php" class="btn btn-sm btn-info"> << Voltar</a>

    <h2>Formulário de Cadastro de <u>Fornecedores</u></h2>
<hr>
    <form method="post" action="processar.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" class="form-control" required><br><br>

        <label for="telefone">Data de cadastro:</label>
        <input type="date" id="telefone" name="telefone" class="form-control" required><br><br>

        <label for="produto">ID do Produto:</label>
        <input type="text" id="produto" name="produto" class="form-control" required><br><br>

        <label for="nota_fiscal">Número da Nota Fiscal:</label>
        <input type="text" id="nota_fiscal" name="nota_fiscal" class="form-control" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" class="form-control" required><br><br>

        <label for="telefone">Endereço:</label>
        <input type="text" id="telefone" name="telefone" class="form-control" required><br><br>

        <button type="submit" value="Cadastrar" class="btn btn-dark">Cadastrar</button>
    </form>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</div>

</body>
</html>
