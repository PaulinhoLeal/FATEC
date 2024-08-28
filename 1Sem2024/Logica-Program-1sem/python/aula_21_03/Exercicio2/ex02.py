quilometro = float(input('Quantos kilometros percorreu? '))
combustivel = float(input('Quantos litros de combustível gastou? '))
valorCombustivel = float(input('Quantos está custando o litro do combustivel? '))

print(f'taxa de consumo: {quilometro/combustivel:.2f} km/L')
print(f'valor gasto por quilometro rodado: {valorCombustivel/quilometro}')
