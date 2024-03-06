<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<div class = "TextoPadrao"> 
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "ingressos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }
    if(isset($_POST['Salvar'])) { // Verifica se o botão de salvar foi pressionado
        
        // Consulta SQL para buscar os ingressos
        $sql = "SELECT id, vendido FROM ingressos";
        $resultado = mysqli_query($conn, $sql);
        
        // Array para armazenar os ingressos vendidos
        $vendidos = array();
        
        // Loop para verificar quais ingressos foram vendidos
        while ($row = mysqli_fetch_assoc($resultado)) {
            if ($row['vendido'] == 1) {
                $vendidos[] = $row['id'];
            }
        }
        


        
        if( isset($_POST['ck']) ) { // Verifica se algum ingresso foi selecionado
            $nomeVendedor = $_POST['nomeVendedor'];
            $nomeComprador = $_POST['nomeComprador'];
            $cks = $_POST['ck']; // Obtém os valores das checkboxes marcadas
            
            if(isset($_POST['pago'])){ 
                $pago = 1;
            }else{ 
                $pago = 0;
            }

            foreach($cks as $ck) {
                
                if((int)$ck == 0){
                    $id = str_replace('C','1',$ck);
                    $id = (int)$id; 
                }
                else{
                    $id = (int)$ck;
                }


                if(in_array($id,$vendidos) == FALSE){
                    
                    // compara se tem ingresso selecionado que não esteja no banco 
                
                    $sql = "INSERT INTO ingressos (`id`, `cks`,`comprador`,`vendedor`, `pago`, `vendido`) VALUES ('$id', '$ck','$nomeComprador','$nomeVendedor','$pago', 1)";
                    if (($result =$conn->query($sql)) !== FALSE) {
                        
                        echo"ingresso: ",$ck ,"<br>",
                        "Vendido por: ", $nomeVendedor,"<br>",
                        "Vendido para: ", $nomeComprador,"<br>";
                        if($pago == 1){ 
                            echo"O Ingresso foi pago.<br>";
                        }else{ 
                            echo"O Ingresso não foi pago.<br>";
                        }
                        echo"Salvo com sucesso!<br>"; 
                    
                    } else {
                
                        echo "Erro ao salvar ingresso $ck: <br> " . $conn->error . "<br>";
                    }
                    echo"==================================================================<br>";
                    }
            
                }
        }
    }
    elseif (isset($_POST['altPag'])) {
        $cks = $_POST['pagar'];
        foreach($cks as $ck){
            
            $sql = "UPDATE ingressos SET pago = 1 WHERE ingressos.cks = '$ck' ";
            if (($result =$conn->query($sql)) !== FALSE) {
                echo"Pagamento do ingresso ",$ck," alterado com sucesso<br>";
            }else{ 
                echo"Falha ao alterar o pagamento do ingresso ",$c,"<br>";
            }
        }
        

    }   
    else{
        echo"NAO PRESSIONADO";
    }
    $conn->close(); 
    
    exec("python pyt/pric.py", $output);

    ?>
    <div>
    <button name = "Retornar" id="Retornar" class = "Return" value = "Return" ><a href = "index.php"> Retornar </a> </button>
    </div>
</div>
</body>
</html>