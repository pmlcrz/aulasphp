<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade aula 1 - 07/08/2023</title>
</head>
<body>
    <?php
        require 'ContaCorrente.class.php';
     
        $cliente1 = new ContaCorrente("Pamela", 123, 600.00, "sim");
        $cliente2 = new ContaCorrente("Thomas", 456, 290.00, "não");

        $cliente1->exibirSaldo();
        $cliente1->sacar(600);

        
        $cliente2->exibirSaldo();
        $cliente2->depositar(300);
        $cliente2->exibirSaldo();
        $cliente2->sacar(1590);


    ?>
</body>
</html>
