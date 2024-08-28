jogador1= int(input('Escolha um número entre 1 e 10 jogador 1:\n'))
while(not(jogador1>0 and jogador1<=10)):
    print('Digite um numero entre 1 e 10')
    jogador1= int(input('Escolha um número entre 1 e 10 jogador 1:\n'))
jogador2= int(input('insira o número que acha ser o certo jogador 2:\n'))
while(not(jogador1==jogador2)):
        print('errou')
        jogador2= int(input('insira o número que acha ser o certo jogador 2:\n'))
print('Acertouuuu')
