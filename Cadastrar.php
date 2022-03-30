<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: Login.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar</title>
    <link rel="stylesheet" href='style.css'>
    <style type="text/css">
        body{ font-size: 20px; text-align: center; padding: 130px;  color: white;}
    </style>
</head>
<body>
    <div class="page-header">
        <h2>Bem vindo, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        </b>Cadastre um carro desejado:</h2>
    </div>
    <p> 
        <form action="Registrar.php" method="post">          
            <input type="text" placeholder="Nome" id="marca" name="marca"><br><br>         
            <input type="text" placeholder="Modelo" id="modelo" name="modelo"><br><br>         
            <input type="text" placeholder="Placa" id="placa" name="placa"><br><br>
            <input type="submit" value="Registrar">         
        </form>
        <br><br>
    </p>
</body>
</html>