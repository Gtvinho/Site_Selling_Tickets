<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imagem Mapa</title>
</head>
<body>
<style>
 
 .color-block {
      display: inline-block;
      width: 20px;
      height: 15px;
    }

    .red {
      background-color: #FF0000;
    }

    .green {
      background-color: #00FF00;
    }

    .yellow {
      background-color: #FFFF00;
    }

    .caption {
      display: inline-block;
      margin-left: 10px;
      vertical-align: middle;
    }
    .foto {
        text-align: center;
    }
    .detalhes{ 
        text-align: center;
    }
    
</style>
<?php 
   $caminhoImagem = 'imagens/MapaFinal.png';
   echo"<div class='foto' id ='MapaFinal'>" ;
  
    echo "<img src='".$caminhoImagem."' alt='Mapa' height='800' width = '1000'>";
    ?>
    <div class = 'detalhes'>
    <div class="color-block red"></div>
  <div class="caption">: Livre ||</div>

  <div class="color-block yellow"></div>
  <div class="caption">: Reservado ||</div>

  <div class="color-block green"></div>
  <div class="caption">: Vendido</div>


  </div> 
    <button name = "Retornar" id="Retornar" class = "Return" value = "Return" ><a href = "Venda.php"> Fechar </a> </button>

  

</body>
</html>