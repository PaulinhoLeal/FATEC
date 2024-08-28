a,b,c = map(int,input().split())
maior_numero=0
menor_numero=0
media = (a+b+c)/3
if a > b:
    if a < c:
        maior_numero = c
        menor_numero = b
    else:
        if c < b:
            maior_numero =a
            menor_numero= c
else:
    if c > b:
        maior_numero = c
        menor_numero = a 
    else:
        if c < a:
            maior_numero = b 
            menor_numero = c 
print(f'media:{media}\nmaior numero:{maior_numero}\nmenor numero:{menor_numero}')

