var vet=[]

  
for (var  i = 0; i < 6; i++)
{
    vet.push(eval(prompt("Digite o numero")))     
}
document.write("Valor já lidos  ")
for(var i=0; i<vet.length; i++)
{
    document.write("<br>",vet[i])
}