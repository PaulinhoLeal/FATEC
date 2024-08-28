n_contato=1
escolha = int(input(f'[1] - cadastrar contato {n_contato} [2] - sair:\n'))
agenda =[]
while escolha != 2:
    agenda.append(input('informe seu nome, telefone, email: ').split())
    n_contato+=1
    escolha = int(input(f'[1] - cadastrar contato {n_contato} [2] - sair:\n'))
print('Contatos na agenda\n',agenda)


