contador =1
totalVendasMes = 0
while contador<=12:
    vendas=int(input(f'Quantidade de vendas no {contador}° mes: '))

    totalVendasMes = vendas + totalVendasMes
    contador = contador + 1

print(f'{totalVendasMes} Vendas São o total de vendas nesse ano')