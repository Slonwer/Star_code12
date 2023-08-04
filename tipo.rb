def calcular_saldo(transacoes)
  receitas = 0
  despesas = 0

  transacoes.each do |transacao|
    if transacao[:tipo] == 'receita'
      receitas += transacao[:valor]
    elsif transacao[:tipo] == 'despesa'
      despesas += transacao[:valor]
    end
  end

  saldo = receitas - despesas
  return saldo
end

transacoes = [
  { tipo: 'receita', valor: 1000 },
  { tipo: 'receita', valor: 500 },
  { tipo: 'despesa', valor: 200 },
  { tipo: 'despesa', valor: 300 },
  { tipo: 'receita', valor: 1200 },
]

saldo_total = calcular_saldo(transacoes)
puts "Saldo Total: R$ #{saldo_total}"
