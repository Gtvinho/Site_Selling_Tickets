<!DOCTYPE html>
<html lang="pt-br">
<head> "
    <title>
        Cachorro Louco -- Mesas 
    </title>  
    <?php
    header("Cache-Control: no-cache, no-store, must-revalidate");
    header("Pragma: no-cache");
    header("Expires: 0");  
    ?>
</head>

<body>
<!--################################################################-->
<!--################################################################-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!--################################################################-->
<!--################################################################-->

  <link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
  <style> 
    h1{ 
      color: white;
    }
  
  </style> 

  <h1> Mesas para show Chorro Louco </h1>
   <?php 
   $caminhoImagem = 'imagens/MapaFinal.png';
   echo"<div class='foto' id ='MapaFinal'>" ;
  
     echo"<a href='Imagem.php'>";
  
      echo "<img src='".$caminhoImagem."' alt='Mapa'width='600'  height'500'>";
  
    echo"</a>";
  
  
    echo"</div> ";
  echo"</div> ";
  
  ?>


  
  <h1> Selecione a mesa Vendida: </h1>
  
  <!--######################################################################-->
  <!-- #####################################################################  -->
  <form method="post" action="Salvar.php">
    <button class="botaoColapse" type="button" data-toggle="collapse" data-target="#check-1-10" aria-expandefalse" aria-controls="collapseExample">001-010</button>
    <div class="collapse" id="check-1-10"> 
        <div class="cartoesSelecao">  
        
        <?php
        $conn = mysqli_connect("localhost", "root", "root", "ingressos");
        // Consulta SQL para buscar os ingressos
        $sql = "SELECT cks, vendido FROM ingressos";
        $resultado = mysqli_query($conn, $sql);
        
        // Array para armazenar os ingressos vendidos
        $vendidos = array();
        
        // Loop para verificar quais ingressos foram vendidos
        while ($row = mysqli_fetch_assoc($resultado)) {
            if ($row['vendido'] == 1) {
                $vendidos[] = $row['cks'];
            }
        }
        $c = 1; 
        while($c <= 10){
          
          if($c != 10){ 
          
            if(in_array($c, $vendidos)){

              echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "00',$c,'"checked>',
              '<label for="checkbox-',$c, '"> 00', $c, '</label><br> ';} 
          
            else{ 
              echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "00',$c,'">',
              '<label for="checkbox-',$c, '"> 00', $c, '</label><br> ';
            }
          }

          else{
            if(in_array(10,$vendidos)){
            echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "0',$c,'"checked>',
            '<label for="checkbox-',$c, '"> 0', $c, '</label><br> ';
            }
            else{
              echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "0',$c,'">',
            '<label for="checkbox-',$c, '"> 0', $c, '</label><br> ';
            }
          }
          $c = $c +1; 
        }  
        ?>

        </div>
    </div>  
    <!--######################################################################-->
    <!-- #####################################################################  -->
    <button class="botaoColapse" type="button" data-toggle="collapse" data-target="#check-11-20" aria-expandefalse" aria-controls="collapseExample">011-020</button>
    <div class="collapse" id="check-11-20">
      <div class="cartoesSelecao">
      <?php
        $c = 11; 
        while($c <= 20){
          if(in_array($c, $vendidos)){

            echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "0',$c,'"checked>',
            '<label for="checkbox-',$c, '"> 0', $c, '</label><br> ';} 
        
            else{ 
            echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "0',$c,'">',
            '<label for="checkbox-',$c, '"> 0', $c, '</label><br> ';
          }
        
          $c = $c +1; 
        }  
        ?>

      </div>
    </div>
    <!--######################################################################-->
    <!-- #####################################################################  -->
    <button class="botaoColapse" type="button" data-toggle="collapse" data-target="#check-21-30" aria-expandefalse" aria-controls="collapseExample">021-030</button>
    <div class="collapse" id="check-21-30">
      <div class="cartoesSelecao">
      <?php
        $c = 21; 
        while($c <= 30){
          if(in_array($c, $vendidos)){

            echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "0',$c,'"checked>',
            '<label for="checkbox-',$c, '"> 0', $c, '</label><br> ';} 
        
            else{ 
            echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "0',$c,'">',
            '<label for="checkbox-',$c, '"> 0', $c, '</label><br> ';
          }
        
          $c = $c +1; 
        }  
        ?>

      </div>
    </div>
    <!--######################################################################-->
    <!-- #####################################################################  -->
    <button class="botaoColapse" type="button" data-toggle="collapse" data-target="#check-31-42" aria-expandefalse" aria-controls="collapseExample">031-042</button>
    <div class="collapse" id="check-31-42">  
      <div class="cartoesSelecao">
      <?php
        $c = 31; 
        while($c <= 42){
          if(in_array($c, $vendidos)){

            echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "0',$c,'"checked>',
            '<label for="checkbox-',$c, '"> 0', $c, '</label><br> ';} 
        
            else{ 
            echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "0',$c,'">',
            '<label for="checkbox-',$c, '"> 0', $c, '</label><br> ';
          }
        
          $c = $c +1; 
        }
        ?>

        </div>
    </div>
    
  <!-- inicio das mesas C1 -> C42 -->
  <br>
  <button class="botaoColapse" type="button" data-toggle="collapse" data-target="#check-C1-C10" aria-expandefalse" aria-controls="collapseExample">C01-C10</button>
  <div class="collapse" id="check-C1-C10"> 
    <div class="cartoesSelecao">  
    <?php
        $c = 1; 
        while($c <= 10){
          if($c != 10){ 
            $str = strval($c);
            $str2 = 'C0'.$str; 
          
            if(in_array($str2, $vendidos)){

              echo' <input type="checkbox" id="checkbox-C0',$c,'" name = "ck[]" value = "C0',$c,'"checked>',
              '<label for="checkbox-C0',$c,'">C0',$c,'</label> <br>';
          
            } 
        
            else{ 
              echo' <input type="checkbox" id="checkbox-C0',$c,'" name = "ck[]" value = "C0',$c,'">',
              '<label for="checkbox-C0',$c,'">C0',$c,'</label> <br>';
          }
        }else{ 
          $str = strval($c);
          $str2 = 'C'.$str; 

            if(in_array($str2, $vendidos)){
             

              echo' <input type="checkbox" id="checkbox-C',$c,'" name = "ck[]" value = "C',$c,'"checked>',
              '<label for="checkbox-C',$c,'">C',$c,'</label> <br>';
            
            } 
          
              else{ 
                echo' <input type="checkbox" id="checkbox-C',$c,'" name = "ck[]" value = "C',$c,'">',
                '<label for="checkbox-C',$c,'">C',$c,'</label> <br>';

          }
        
         
        }
        $c = $c +1; 
      }
        ?>
    
    </div>
  </div>
  <button class="botaoColapse" type="button" data-toggle="collapse" data-target="#check-C11-C20" aria-expandefalse" aria-controls="collapseExample">C11-C20</button>
  <div class="collapse" id="check-C11-C20"> 
    <div class="cartoesSelecao">  
    <?php
        $c = 11; 
        while($c <= 20){
          $str = strval($c);
          $str2 = 'C'.$str; 
            if(in_array($str2, $vendidos)){

            echo' <input type="checkbox" id="checkbox-C',$c,'" name = "ck[]" value = "C',$c,'"checked>',
            '<label for="checkbox-C',$c,'">C',$c,'</label> <br>';
          
          } 
        
            else{ 
              echo' <input type="checkbox" id="checkbox-C',$c,'" name = "ck[]" value = "C',$c,'">',
              '<label for="checkbox-C',$c,'">C',$c,'</label> <br>';

        }

        $c = $c +1; 
      }
        ?>


    </div>
  </div>
  <button class="botaoColapse" type="button" data-toggle="collapse" data-target="#check-C21-C30" aria-expandefalse" aria-controls="collapseExample">C21-C30</button>
  <div class="collapse" id="check-C21-C30"> 
    <div class="cartoesSelecao">  
    <?php
        $c = 21; 
        while($c <= 30){
          $str = strval($c);
          $str2 = 'C'.$str; 
            if(in_array($str2, $vendidos)){

            echo' <input type="checkbox" id="checkbox-C',$c,'" name = "ck[]" value = "C',$c,'"checked>',
            '<label for="checkbox-C',$c,'">C',$c,'</label> <br>';
          
          } 
        
            else{ 
              echo' <input type="checkbox" id="checkbox-C',$c,'" name = "ck[]" value = "C',$c,'">',
              '<label for="checkbox-C',$c,'">C',$c,'</label> <br>';

        }

        $c = $c +1; 
      }
        ?>
    </div>
  </div>
  <button class="botaoColapse" type="button" data-toggle="collapse" data-target="#check-C31-C35" aria-expandefalse" aria-controls="collapseExample">C31-C35</button>
  <div class="collapse" id="check-C31-C35"> 
    <div class="cartoesSelecao">  
    <?php
        $c = 31; 
        while($c <= 35){
          $str = strval($c);
          $str2 = 'C'.$str; 
            if(in_array($str2, $vendidos)){

            echo' <input type="checkbox" id="checkbox-C',$c,'" name = "ck[]" value = "C',$c,'"checked>',
            '<label for="checkbox-C',$c,'">C',$c,'</label> <br>';
          
          } 
        
            else{ 
              echo' <input type="checkbox" id="checkbox-C',$c,'" name = "ck[]" value = "C',$c,'">',
              '<label for="checkbox-C',$c,'">C',$c,'</label> <br>';

        }

        $c = $c +1; 
      }
        ?>
    </div>
  </div>
    <h2>Nome Comprador</h2>
    <input type="text" placeholder="Nome Comprador" name = "nomeComprador"> 

    <h2>Nome Vendedor</h2>
    <input type="text" placeholder="Nome Vendedor" name = "nomeVendedor"> 
    <br>
    <br>
      <h2>O ingresso foi pago ? </h2>
      <h3>Atenção, apenas marcar esta opção caso</h3>
      <h3>o comprador já tenha pago o ingresso!</h3><br> 
      <div class = cartoesSelecao2>
      <input type="checkbox" id="pago" name = "pago[]" value = 1>
      <label for="pago">Sim, o ingresso foi pago</label> 
      </div>
      <div>
        <button name = "Salvar" id="salvarBotao" class = "button" value = "Salvar"> Salvar </button>
      </div>

  </form>
  <!-- #####################################################################-->
  <!--######################################################################-->
</body>
</html>

