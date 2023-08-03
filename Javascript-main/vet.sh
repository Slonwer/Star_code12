#!/bin/bash

vet=()
soma=0
media=0

echo "Digite o número:"
read numero

vet+=($numero)

for ((i=1; i<=6; i++))
do
echo "Digite o número:"
read numero
vet+=($numero)
done

for ((i=0; i<${#vet[@]}; i++))
do
soma=$((soma + ${vet[i]}))
done

media=$((soma / 6))

echo "A Média: $media"
echo "A Soma: $soma"




