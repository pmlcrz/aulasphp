<?php

//nome da classe
class ContaCorrente {
    //atributos da classe
    public $titular;
    public $nConta;
    public $saldo;
    public $lis;

//métodos da classe
    function __construct($titular, $nConta, $saldo, $lis="não"){
        $this->titular = $titular;
        $this->nConta = $nConta;
        $this->saldo = $saldo;
        $this->lis = $lis;
    }
    public function sacar($valor){
        
        if ($valor<=$this->saldo || $this->lis == "sim") {
            $this->saldo = $this->saldo - $valor;           
        } else {
            echo "⚠️ Tentativa de saque {$valor}<br>";
            echo "✅ O saldo atual é: {$this->saldo}<br>";
            echo "🚫 saldo insuficiente<br>";
        }


        //return "Executou o sacar na conta corrente<br>";
    }

    public function depositar($valor){

        $this->saldo = $this->saldo + $valor;

        //return "Depositou o dinheiro na conta corrente<br>";
    }

    public function transferir(){

        //return "Transferiu o dinheiro da conta corrente<br>";
    }

    public function exibirSaldo(){

        echo "Cliente: {$this->titular} <br> saldo {$this->saldo}<br>
            <hr>";
}
}