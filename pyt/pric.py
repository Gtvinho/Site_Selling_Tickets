from  PIL import Image
from Lista import *
from BD import *


def cores(estado):
  if (R > 100 and R < 200 ):
    if estado == 1:
      New.putpixel((l, c),(0, 255 ,0))
    elif estado == 0 :
       New.putpixel((l, c),(255,255,0))
  elif (R < 100):
    New.putpixel((l, c),(0, 0 ,0))
  else: 
    New.putpixel((l, c),(255, 255 ,255))



imagem = Image.open("./Imagens/Mapa.jpg")
altura = imagem.height
largura = imagem.width

New = Image.new('RGB', (largura, altura))

#####################################################
if len(pos) == 0 and len(estado2) == 0: 
  c = 0
  while c < altura: 
    l = 0
    while l < largura: 
      R, G, B = imagem.getpixel((l, c))

      if (R > 100 and R < 200 ):
        New.putpixel((l, c),(255,0 ,0))
      else: 
        New.putpixel((l,c),(R,G,B))
      l = l +1
    c = c + 1
#####################################################

for x in range(len(pos)):

  if x == 0:
    mesa = pos[x] - 1
    if mesa < 100:
        estado = estado2[x]#1
        c = 0
        while c < altura: 
          l = 0
          while l < largura: 
            R, G, B = imagem.getpixel((l, c))
            if c > MesasM[mesa][0] and c < (MesasM[mesa][0]+43) and l > MesasM[mesa][1]  and l < (MesasM[mesa][1]+43):
                cores(estado)
            else:
              New.putpixel((l, c),(R,G,B))
            l = l +1
          c = c + 1
    else:
      mesa = mesa - 100
      estado = estado2[x]#1
      c2 = (int(MesasC[mesa][1])+int(MesasC[mesa][3]))
      l2 =(int(MesasC[mesa][0]) + int(MesasC[mesa][2]))
      c = 0 
      while c < altura: 
        l = 0
        while l < largura:
          R, G, B = imagem.getpixel((l, c))
          if c < c2 and c > MesasC[mesa][1] and l > MesasC[mesa][0] and l < l2: 
              cores(estado)
          else:
            New.putpixel((l, c),(R,G,B))
          l = l +1
        c = c + 1
  else:
  ##########################################################################################################
  ##########################################################################################################
      mesa = pos[x] - 1
      if mesa < 100:
        estado = estado2[x]#1
        c = MesasM[mesa][0]
        c2 = c + 43
        while c < (c2): 
          l = MesasM[mesa][1]
          l2 = l + 43

          while l < (l2): 
        
            R, G, B = New.getpixel((l, c))
            cores(estado)
            l = l +1
          c = c + 1
      else:
        mesa = mesa - 100
        estado = estado2[x]
        c = MesasC[mesa][1]
        c2 = (int(MesasC[mesa][1])+int(MesasC[mesa][3]))
        while c < (c2): 
          
          l = MesasC[mesa][0]
          l2 =(int(MesasC[mesa][0]) + int(MesasC[mesa][2]))
          while l < (l2): 
            R, G, B = New.getpixel((l, c))
            cores(estado)
            l = l +1
          c = c + 1

c = 0
while c < altura: 
  l = 0
  while l < largura: 
    R, G, B = New.getpixel((l, c))


    if (R > 100 and R < 200 ):
      New.putpixel((l, c),(255,0 ,0))
    l = l +1
  c = c + 1
New.save("Imagens/MapaFinal.png")

