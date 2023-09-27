<?php

class Conta {
    public string $nome;

    public int $numAgencia;

    public string $numConta;

    public float $saldo;


    public function __construtor ( string $nome,  int $numAgencia,  string $numConta, float $saldo){
        $this-> nome = $nome;
        $this->numAgencia = $numAgencia;
        $this-> numConta = $numConta;
        $this-> saldo = $saldo;

    }
    public function exibirDados(): string{
       
       return"Nome:{$this->nome}</br>"
       "N Agencia:{$this->numAgencia}</br>"
       "N conta:{$this->numConta}</br>"
       "Saldo:{$this->saldo}</br>"
    }
}







?>