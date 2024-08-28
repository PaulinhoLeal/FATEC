jogador1= int(input('Escolha um número entre 1 e 10 jogador 1:\n'))
tentativas = 0
while True: 
    if jogador1 >0 and jogador1<=10:
        jogador2= int(input('insira o número que acha ser o certo jogador 2:\n'))
        if jogador2 == jogador1:
            print(f'número tentativas:{tentativas}\nPARABENS ACERTOU!')
            break
        else:
            print('Errado! tente novamente!')
            tentativas+=1
    else:
        print('O número precisa estar entre 0 e 10')
        jogador1= int(input('tente outro número jogador 1:\n'))
