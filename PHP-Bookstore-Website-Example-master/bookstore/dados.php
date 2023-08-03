<?php
class Produto {
    private $nome;
    private $quantidade;

    public function __construct($nome, $quantidade) {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
    }

    public function getQuantidade() {
        return $this->quantidade;
    }
}

class Cliente {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Funcionario {
    private $nome;

    public function __construct($nome) {
        $this->nome = $nome;
    }
}

// Dados do estoque
$estoque = [
    new Produto("Produto A", 10),
    new Produto("Produto B", 15),
    new Produto("Produto C", 5)
];

// Dados dos clientes
$clientes = [
    new Cliente("Cliente 1"),
    new Cliente("Cliente 2"),
    new Cliente("Cliente 3")
];

// Dados dos funcionários
$funcionarios = [
    new Funcionario("Funcionário 1"),
    new Funcionario("Funcionário 2"),
    new Funcionario("Funcionário 3")
];

// Função para somar o estoque
function somarEstoque($estoque) {
    $totalEstoque = 0;
    foreach ($estoque as $produto) {
        $totalEstoque += $produto->getQuantidade();
    }
    return $totalEstoque;
}

// Função para contar o total de clientes
function contarClientes($clientes) {
    return count($clientes);
}

// Função para contar o total de funcionários
function contarFuncionarios($funcionarios) {
    return count($funcionarios);
}

// Exemplo de uso:
$totalEstoque = somarEstoque($estoque);
$totalClientes = contarClientes($clientes);
$totalFuncionarios = contarFuncionarios($funcionarios);

echo "Total de estoque: " . $totalEstoque . "<br>";
echo "Total de clientes: " . $totalClientes . "<br>";
echo "Total de funcionários: " . $totalFuncionarios . "<br>";
