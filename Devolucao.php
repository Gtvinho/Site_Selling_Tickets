<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <title>
        Cachorro Louco -- Devolução 
    </title>    
</head>
<body>
    <style> 
        body{
            background-color: black;
        }
        .check{ 
            color: white;
        }
    </style> 
    <form method="post" action="devolucao2.php">
        <div class = "check"> 
            <?php
                $conn = mysqli_connect("localhost", "root", "root", "ingressos");
                // Consulta SQL para buscar os ingressos
                $sql = "SELECT cks,comprador, vendido FROM ingressos";
                $resultado = mysqli_query($conn, $sql);

                // Array para armazenar os ingressos vendidos
                $vendidos = array();
                $comprador = array(); 
                // Loop para verificar quais ingressos foram vendidos
                while ($row = mysqli_fetch_assoc($resultado)) {
                    if ($row['vendido'] == 1) {
                        $vendidos[] = $row['cks'];
                        $comprador[] = $row['comprador']; 
                    }
                }
                $a = 0;
                foreach($vendidos as $c){
                      

                    echo' <input type="checkbox" id ="checkbox-',$c,'" name = "ck[]" value = "',$c,'">',
                    '<label for="checkbox-',$c, '">', $c, ' || ', $comprador[$a],' </label><br> ';
                    echo"==================<br> ";
                    $a = $a + 1; 
                }  
            ?>
        </div>
        <div>
            <button name = "Devolver" id="Devolver" class = "Devolver" value = "Devolver">Devolver</button>
        </div>
    </form>


</body>
</html>