<?php
 
 class ContaCorrente {
    
    private $titular;
    private $nConta;
    private $saldo;
    private $lis;

    public function __construct($titular, $nConta, $saldo, $lis = "não") {
        $this->titular = $titular;
        $this->nConta = $nConta;
        $this->saldo = $saldo;
        $this->lis = $lis;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo || $this->lis === "sim") {
            $this->saldo -= $valor;
        } else {
            $this->mostrarMensagem("Tentativa de saque {$valor}<br>O saldo atual é: {$this->saldo}<br>Saldo insuficiente");
        }
    }

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function transferir($contaDestino, $valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            $contaDestino->saldo += $valor;
            $this->mostrarMensagem("Transferência de {$valor} para a conta {$contaDestino->nConta} realizada com sucesso.");
        } else {
            $this->mostrarMensagem("Saldo insuficiente para transferência de {$valor} para a conta {$contaDestino->nConta}.");
        }
    }

    public function exibirSaldo() {
        $this->mostrarMensagem("Cliente: {$this->titular}<br>Saldo: {$this->saldo}");
    }

    private function mostrarMensagem($mensagem) {
        echo "{$mensagem}<br><hr>";
    }
}

 
 
 /*
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
            echo " Tentativa de saque {$valor}<br>";
            echo " O saldo atual é: {$this->saldo}<br>";
            echo " saldo insuficiente<br>";
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
*/

