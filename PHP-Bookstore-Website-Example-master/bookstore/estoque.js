
function somarEstoque(estoque) {
    let totalEstoque = 0;
    for (const produto in estoque) {
      totalEstoque += estoque[produto];
    }
    return totalEstoque;
  }
  
  // Função para somar os valores de clientes
  function somarClientes(clientes) {
    return clientes.length;
  }
  
  // Função para somar os valores de funcionários
  function somarFuncionarios(funcionarios) {
    return funcionarios.length;
  }
  
  
  const estoque = {
    produtoA: 10,
    produtoB: 15,
    produtoC: 5
  };
  
  const clientes = ["cliente1", "cliente2", "cliente3"];
  
  const funcionarios = ["funcionario1", "funcionario2", "funcionario3", "funcionario4"];
  
  const totalEstoque = somarEstoque(estoque);
  const totalClientes = somarClientes(clientes);
  const totalFuncionarios = somarFuncionarios(funcionarios);
  
  console.log("Total de estoque:", totalEstoque);
  console.log("Total de clientes:", totalClientes);
  console.log("Total de funcionários:", totalFuncionarios);
  class Produto {
    constructor(nome, quantidade) {
      this.nome = nome;
      this.quantidade = quantidade;
    }
  }
  
  class Cliente {
    constructor(nome, email) {
      this.nome = nome;
      this.email = email;
    }
  }
  
  class Funcionario {
    constructor(nome, cargo) {
      this.nome = nome;
      this.cargo = cargo;
    }
  }
  
  // Exemplo de uso:
  const produto1 = new Produto("Produto A", 10);
  const produto2 = new Produto("Produto B", 15);
  const produto3 = new Produto("Produto C", 5);
  
  const cliente1 = new Cliente("Cliente 1", "cliente1@example.com");
  const cliente2 = new Cliente("Cliente 2", "cliente2@example.com");
  
  const funcionario1 = new Funcionario("Funcionário 1", "Vendedor");
  const funcionario2 = new Funcionario("Funcionário 2", "Gerente");
  
  console.log("Produto 1:", produto1);
  console.log("Cliente 1:", cliente1);
  console.log("Funcionário 1:", funcionario1);
  