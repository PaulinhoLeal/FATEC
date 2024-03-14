salario = float(input('Digite seu salario: '))
percentual = int(input('Digite o percentual do seu aumento: '))
percentual = salario *(percentual/100)
novoSalario = salario + percentual
print(f'Seu novo salario é de {novoSalario}')