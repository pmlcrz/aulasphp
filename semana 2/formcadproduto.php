<html>
<lang= pt-br>
<head> 
    <title>Cadastrar usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <center>
    <h3>✩ Formulário de cadastro de produto ✩</h3>
    <hr>
    <a href="menu.php"> ← Voltar ao menu </a><br>
    <br>
<form action="inserirproduto.php" method="post">
    <h5>Nome do produto</h5> <input name="nprod" required type="text" name="login">*<br>
    <h5>Id do produto</h5> <input name="idprod" required type="number" name="senha">*<br>
    <h5>Data de cadastro</h5> <input name="datacad" required type="date" name="datacad"><br>
    <h4>* Campos obrigatórios!</h4>
    <input type ="submit" value="Cadastrar produto">
</form>
</center>

</body>

</html> 