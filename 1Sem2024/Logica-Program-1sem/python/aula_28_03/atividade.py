cadastro = False
login = False
rodando = True
nome_cadastrado =''
pass_cadastrado=''
while rodando :
    escolha =input('[1]login [2]cadastro [3]Sair\n')
    match (escolha) :
        case '1':
            login = True
        case '2':
            cadastro= True
        case '3':
            rodando=False 

    while(login):
        nome_usuario = input('Usuário: ')
        senha = input('Senha: ')

        if nome_cadastrado == nome_usuario and pass_cadastrado==senha:
            print('                                                          ')
            login=False
            rodando=False

        else:
            print('Usuario ou senha inválidos')
            login=False

    while cadastro:
        nome_cadastrado = input('Nome do usuário: ')
        pass_cadastrado= input('Crie uma senha: ')

        cadastro = False

