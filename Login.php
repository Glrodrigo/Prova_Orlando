<?php
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'rodrigo' and $_POST['password'] == 'apenasumshow'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'Rodrigo Silva';
         header("location: begin.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href='style.css'>

</head>
<body>
    <div class="container">
        <div class="cadastro">
            <h1>Login</h1>
            <p>Digite seu login e senha abaixo</p>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="text" placeholder="Nome" name="username" value="rodrigo">
                    <br><br>
                    <input type="password" placeholder="Senha" name="password" value="apenasumshow">
                    <br><br>
                    <button>Enviar</button>
            </form>
        </div>
    </div>

</body>
</html>









 
