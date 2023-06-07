<html>
<lang= pt-br>
<head> 
    <title>Cadastrar usuário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <center>
    <h3>☺ Formulário de cadastro de usuário ☺</h3>
    <hr>
    <a href="menu.php"> ← Voltar ao menu </a><br>
    <br>
<form action="inserirusuario.php" method="post">
    <h5>Login</h5> <input name="login" required type="text" name="login">*<br>
    <h5>Senha</h5> <input name="senha" required type="password" name="senha">*<br>
    <h5>E-mail</h5> <input name="email" required type="text" name="email">*<br>
    <h5>Data de cadastro</h5> <input name="datacad" required type="date" name="datacad"><br>
    <h4>* Campos obrigatórios!</h4>
    <input type ="submit" value="Cadastrar">
</form>
</center>

</body>

</html> 