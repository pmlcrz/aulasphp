<?php
//simulação de dados no bd

//$senha = 789;
//$login = "Admin";
//$loginDigitado = $_POST['login'];
//$senhaDigitada = $_POST ['senha'];

$login = $_POST['login'];
$senha = $_POST ['senha'];
$email = $_POST ['email'];
$datacad = $_POST ['datacad'];
echo "login: $login <br>";
echo "senha: $senha <br>";
echo "email: $email <br>";
echo "datacad: $datacad <br>";

//if ($login == $loginDigitado and $senha == $senhaDigitada) {
//    echo "Olá, $login";
//} else {
//    echo "Acesso negado";
//}
