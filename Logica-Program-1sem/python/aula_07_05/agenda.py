from art import *
agenda = []

def adicionar_contato():
    nome = input('Nome: ')
    email = input('Email: ')
    telefone = input('Telefone: ')
    contato = {'Nome':nome,'Email':email,'Telefone':telefone}
    agenda.append(contato)
def listar_contatos():
    if agenda:
        for i,contato in enumerate(agenda):
            print(f'{i+1}. Nome: {contato["Nome"]} Email: {contato["Email"]} Telefone: {contato["Telefone"]}')
    else:
        print('Sua agenda esta vazia')
def atualizar_contato():
    atualizar = int(input('Digite o indice do contato que deseja alterar: ')) 
    for i in range(len(agenda)):
        if (i+1) == atualizar:
            for contato in agenda:
                contato["Nome"] = input('Novo nome: ').strip()
                contato["Email"] = input('Novo email: ')
                contato["Telefone"] = input('Novo telefone: ')
        print(i)
        print (agenda)
def remover_contato():
    remover = int(input('Digite o indice do contato que deseja alterar: ')) 
    print(len(agenda))
    for i in range(len(agenda)):
        if (i+1) == remover:
            agenda.pop(i)
while True:
    print(""" 
=====SISTEMA======
[1]Adicionar contato
[2]Ver seus contatos
[3]Atualizar
[4]Remover contato
[5]Sair
        """)
    opcao = int(input())
    if opcao == 1:
        adicionar_contato()
        print('Contato cadastrado')
    elif opcao == 2:
        print('====AGENDA====')
        listar_contatos()
    elif opcao == 3:
        atualizar_contato()
    elif opcao == 4:
        remover_contato()
    elif opcao == 5:
        break



    