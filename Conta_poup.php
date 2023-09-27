<?php

class ContaPoupanca extends Conta {
    
    public int $tipo;
    public float $sacar;

   

    public function  VerSaldo() {
        $dados = "Nome: {$this->nome}<br>"; 
        $dados .= "NumAgencia: {$this->numAgencia}<br>";
        $dados .= "NumConta: {$this->numConta}<br>"; 
        $dados .= "Saldo: {$this->saldo}<br>"; 
        return "<p>$dados</p>";
    }
}


?>