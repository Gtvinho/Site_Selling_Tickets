<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        // Função para redirecionar para outra página após um determinado tempo
        function redirecionar() {
            window.location.href = 'index.php'; // Substitua 'outra_pagina.php' pelo caminho da página de destino
        }

        // Chama a função de redirecionamento após 5 segundos (5000 milissegundos)
        setTimeout(redirecionar, 5000);
    </script>
</head>
<body>
    
<link rel="stylesheet" type="text/css" href="style.css" media="screen"/>
<div class = TextoPadrao>
<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "ingressos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if(isset($_POST['Devolver'])) { // Verifica se o botão de salvar foi pressionado

    if(isset($_POST['ck'])) { // Verifica se algum ingresso foi selecionado
        $cks = $_POST['ck']; // Obtém os valores das checkboxes marcadas
        foreach($cks as $ck) {
            // Insere os ingressos marcados na tabela do banco de dados com o status de vendido
            $sql = "DELETE FROM `ingressos` WHERE `ingressos`.`cks` = '$ck';";
            if (($result =$conn->query($sql)) !== FALSE) {
                echo "ingresso $ck devolvido com sucesso!<br>"; 
            } else {
                echo "Erro ao devolver ingresso $ck: <br> " . $conn->error . "<br>";
            }
            echo"==================================================================<br>";
        }
    } else {
        echo "Nenhum ingresso foi selecionado.<br>";
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