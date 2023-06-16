<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro de Alunos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
   


</head>
<body>

<div class="container">

<a href="menu.php" class="btn btn-sm btn-info"> << Voltar</a>

    <h2>Formulário de Cadastro de <u>Alunos</u></h2>
<hr>
    <form>

        <div class="mb-3">
        <label for="matricula">ID de Matrícula:</label>
        <input type="number" id="matricula" name="matricula" class="form-control" required ><br><br>
        </div>

        <div class="mb-3">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" class="form-control" required><br><br>
        </div>

        <div class="mb-3">
        <label for="pai">Nome do Pai:</label>
        <input type="text" id="pai" name="pai" class="form-control" required><br><br>
        </div>

        <div class="mb-3">
        <label for="mae">Nome da Mãe:</label>
        <input type="text" id="mae" name="mae" class="form-control" required><br><br>
        </div>

        <div class="mb-3">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required><br><br>
        </div>

        <div class="mb-3">
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" class="form-control" required><br><br>
        </div>

        <div class="mb-3">
        <label for="data_nascimento">Data de Nascimento:</label>
        <input type="date" id="data_nascimento" name="data_nascimento" class="form-control" required><br><br>
        </div>
        
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

</html>
