<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendidos</title>

</head>
<body>
<form method="post" action="Salvar.php">
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<h1>Pagos:</h1>
<div class = TextoPadrao>
<?php
    $conn = mysqli_connect("localhost", "root", "root", "ingressos");
    // Consulta SQL para buscar os ingressos
    $sql = "SELECT cks, comprador, vendedor, pago, vendido FROM ingressos";
    $resultado = mysqli_query($conn, $sql);
    
    // Array para armazenar os ingressos vendidos
    $vendidos = array();
    $vendedor = array();
    $comprador = array();
    $pago = array(); 

    // Loop para verificar quais ingressos foram vendidos
    while ($row = mysqli_fetch_assoc($resultado)) {
        if ($row['vendido'] == 1) {
            $vendidos[] = $row['cks'];
            $comprador[] = $row['comprador'];
            $vendedor[] = $row['vendedor'];
            if( $row['pago']==1){ 
                $pago[] = TRUE;
            }
            else{ 
                $pago[] = FALSE;
            }
        }
    }
    
    $c = 0; 
    while($c < count($vendidos) ){
        if ($pago[$c] == True){ 
        echo"<br>";
        echo"Ingresso: ",$vendidos[$c], " | Comprador: ",$comprador[$c], " | Vendedor: ", $vendedor[$c], "<br>";
        echo"=================================================================<br>";
        }
        $c = $c + 1;
    }
 
?>
<h1>Reservados:</h1>
<?php
  
    $c = 0; 
    while($c < count($vendidos) ){
        if ($pago[$c] == FALSE){ 
        echo"<br>";
        echo"Ingresso: ",$vendidos[$c], " | Comprador: ",$comprador[$c], " | Vendedor: ", $vendedor[$c], "<br>";
        echo' <input type="checkbox" id="pagar',$c,'" name = "pagar[]" value =',$vendidos[$c],'>
        <label for="pagar',$c,'">Pagar ingresso ',$vendidos[$c],'</label><br>';
        echo"=================================================================<br>";
        }
        $c = $c + 1;
    }
?>
    <button name = "altPag" id="altPag" class = "button" > Incluir pagamento </button>
</form>

</div> 
    
</body>
</html>




