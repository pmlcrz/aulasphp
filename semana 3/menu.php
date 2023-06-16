<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro de Clientes</title>
  
</head>
<body>
    <h2>Formulário de Cadastro de Clientes</h2>

    <form method="post" action="processar.php">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required><br><br>

        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>

        <label for="genero">Gênero:</label>
        <select id="genero" name="genero" required>
            <option value="">Selecione</option>
            <option value="masculino">Masculino</option>
            <option value="feminino">Feminino</option>
        </select><br><br>

        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
