cardapio = [('cachorro quente',8.10),('bauru simples',11.30),('bauru c/ovo',15.50),('hamburger',13.10),('cheeseburger',14.30),('refrigerante',5)]
escolha = 0

codigo = int(input('qual lanche quer?'))
for i in range(5):
    if (codigo-1) == i:
        escolha =i
for i,j in enumerate(cardapio):
    if escolha==i:
        quant = int(input('quantos quer?'))
        print(f'{j[0]}\nvalor: {j[1]*quant}')
        break
