<?php

class ContaCorrente {
    public $titular;
    public $nConta;
    public $saldo;
    public $lis;

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

    }

    public function depositar($valor){

        $this->saldo = $this->saldo + $valor;

    }

    public function transferir(){

    }

    public function exibirSaldo(){

        echo "Cliente: {$this->titular} <br> saldo {$this->saldo}<br>
            <hr>";
}
}
