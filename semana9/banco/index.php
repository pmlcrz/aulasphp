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

        echo "<h1>Informações das Contas Correntes</h1>";

        echo "<h2>Cliente 1</h2>";
        $cliente1->exibirSaldo();
        echo "Tentativa de saque de R$600:<br>";
        $cliente1->sacar(600);
        $cliente1->exibirSaldo();

        echo "<h2>Cliente 2</h2>";
        $cliente2->exibirSaldo();
        echo "Depósito de R$300:<br>";
        $cliente2->depositar(300);
        $cliente2->exibirSaldo();
        echo "Tentativa de saque de R$1590:<br>";
        $cliente2->sacar(1590);
        $cliente2->exibirSaldo();
    ?>
</body>
</html>






<!-- <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade aula 1 - 07/08/2023</title>
</head>
<body>
   //
        //o cliente vai receber o objeto que é a conta corrente
        //require 'ContaCorrente.class.php';
       // método construtor:
       // $cliente1 = new ContaCorrente("Pamela", 456, 600.00);
        //$cliente1->$cliente1.$this->titular

        //$cliente1 = new ContaCorrente("Pamela", 123, 600.00, "sim");
        //$cliente2 = new ContaCorrente("Thomas", 456, 290.00, "não");

        //$cliente1->exibirSaldo();
        //$cliente1->sacar(600);

        
        //$cliente2->exibirSaldo();
        //$cliente2->depositar(300);
        //$cliente2->exibirSaldo();
        //$cliente2->sacar(1590);




        //$cliente2 = new ContaCorrente();
        //$cliente2->$titular = 'Thomas';

        //echo $cliente1->sacar();
        //echo $cliente2->depositar();
        //echo $cliente3->transferir();
        //echo $cliente4->exibirSaldo();
    
</body>
</html>
-->