idade = int(input())
if idade < 5:
    print('Sem classificação')
elif idade <=7:
    print('infantil A')
elif idade <=10:
    print('infantil B')
elif idade <=13:
    print('juvenil A')
elif idade <=17:
    print('juvenil B')
else:
    print('Adulto')
