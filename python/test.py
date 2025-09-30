def F(n) : 
    div = 1 
    Liste_div = []
    while div <=n : 
        if n% div == 0 :
            Liste_div.append(div)
        div += 1 
    return Liste_div 

def PGCD(a, b): 

    div_a = F(a)
    div_b = F(b)
    diviseurs_communs = list(set(div_a) & set(div_b))
    return max(diviseurs_communs)
p
print(F(60)) 

#cette fonction a pour role de trouver les diviseurs de 60.