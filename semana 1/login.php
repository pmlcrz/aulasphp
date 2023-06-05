<?php
// no banco de dados existem duas informações
$login = 'Administradora';
$senha = 987654;

$loginDigitado = "Administradora";
$senhaDigitada = 987654;

if ($loginDigitado == $login and $senhaDigitada == $senha) {
    echo "Logado com sucesso";
} else {
    echo "Erro";
}
