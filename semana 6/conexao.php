<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$db = 'dbsenac';

$con = mysqli_connect('localhost',$usuario,$senha,$db); //pode ser tanto a variavel como o 

// var_dump (mysqli_connect ('localhost',$usuario,$senha,$db));

if ($con){
    echo "conectado ao banco de dados";
    }    else {
        echo "<h1>Erro de conexão</h1>";
    }
