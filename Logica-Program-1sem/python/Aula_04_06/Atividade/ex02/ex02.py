quantidade_peca=0
peca_reprovada=0
peca_aprovada=0
lista_aprovadas=[]
lista_reprovadas=[]

for i in range(1,800):
    estado_peca = input('A peça esta aprovada ou reprovada? ')
    if estado_peca.lower() == 'aprovada':
        peca_aprovada +=1
        lista_aprovadas.append(i)


    elif estado_peca.lower()== 'reprovada':
        peca_reprovada+=1
        lista_reprovadas.append(i)

total_aprovadas = peca_aprovada
total_reprovadas = peca_reprovada

print(f'O total de peças aprovadas: {total_aprovadas}\ncodigo das peças aprovadas{lista_aprovadas}')
print(f'O total de peças reprovadas: {total_reprovadas}\ncodigo das peças reprovadas{lista_reprovadas}')
