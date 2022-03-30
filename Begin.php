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
    <title>Inicio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 10px sans-serif; text-align: center; padding: 90px; background-color: black; color: white;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Olá, <b><?php echo htmlspecialchars($_SESSION["username"]); ?>
        <br>
        <h1>Cadastre seu carro agora mesmo!</h1>
        <br>
        <p>Escolha a opção desejada:</p>
        <p>
            <br>
            <a href="Cadastrar.php" class="btn btn-info">Cadastrar veículo</a>
            <br><br>
            <a href="Logout.php" class="btn btn-info">Sair de sua conta</a>
        </p>
    </div>
</body>
</html>