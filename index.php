<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <title>
        Cachorro Louco -- Menu Inicio
    </title>    
</head>
<body>
    <div class = "Imagens">
    <img = src="Imagens/Menu.png" width="800" height="500" name="Img2">
    

  </div>
    <style>
        body{
            background-color: black; 
        }
        .buttonVenda{
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.5s;
            cursor: pointer;
        }
        .buttonVenda{
            background-color: black;
            color: white;
            border: 2px solid #4CAF50;

        }
        .buttonVenda:hover{
            background-color: #4CAF50;
            color: black;
        }
        .botaoInfo{ 
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.5s;
            cursor: pointer;
        }
        .botaoInfo{
            background-color: black;
            color: white;
            border: 2px solid #4c56af
        }
        .botaoInfo:hover{
            background-color: #4c56af;
            color: black;
        }
        .botaoDev{ 
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            transition-duration: 0.5s;
            cursor: pointer;
        }
        .botaoDev{
            background-color: black;
            color: white;
            border: 2px solid #9b2121
        }
        .botaoDev:hover{
            background-color: #9b2121;
            color: black;
        }

    </style>     



    <div>
    <button name = "Vender" id="Vender" class = "buttonVenda" value = "Vender" ><a href = "Venda.php"> Vender </a> </button>
    </div>
    <div>
    <button name = "Vendidos" id="Vendidos" class = "botaoInfo" value = "Vendidos"><a href="Vendidos.php"> Vendidos </a> </button>
    </div>
    <div>
    <button name = "Devolucao" id="Devolucao" class = "botaoDev" value = "buttonRed"><a href="Devolucao.php"> Devolução </a>  </button>
    </div>
    
</body> 
</html>