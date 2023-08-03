<?php
class Produto {
    private $nome;
    private $quantidade;

    public function __construct($nome, $quantidade) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
}

class Cliente {
    private $nome;
    private $email;

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
}

class Funcionario {
    private $nome;
    private $cargo;

    public function __construct($nome, $cargo) {
        $this->nome = $nome;
        $this->cargo = $cargo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCargo() {
        return $this->cargo;
    }

    public function setCargo($cargo) {
        $this->cargo = $cargo;
    }
}


$produto1 = new Produto("Produto A", 10);
$produto2 = new Produto("Produto B", 15);
$produto3 = new Produto("Produto C", 5);

$cliente1 = new Cliente("Cliente 1", "cliente1@example.com");
$cliente2 = new Cliente("Cliente 2", "cliente2@example.com");

$funcionario1 = new Funcionario("Funcionário 1", "Vendedor");
$funcionario2 = new Funcionario("Funcionário 2", "Gerente");

