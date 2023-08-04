function calcularSaldo(transacoes) {
    let receitas = 0;
    let despesas = 0;

   
    for (const transacao of transacoes) {
      if (transacao.tipo === 'receita') {
        receitas += transacao.valor;
      } else if (transacao.tipo === 'despesa') {
        despesas += transacao.valor;
      }
    }


    const saldo = receitas - despesas;
    return saldo;
  }

  
  const transacoes = [
    { tipo: 'receita', valor: 1000 },
    { tipo: 'receita', valor: 500 },
    { tipo: 'despesa', valor: 200 },
    { tipo: 'despesa', valor: 300 },
    { tipo: 'receita', valor: 1200 },
  ];

  
  const saldoTotal = calcularSaldo(transacoes);
  console.log('Saldo Total: R$ ' + saldoTotal.toFixed(2));