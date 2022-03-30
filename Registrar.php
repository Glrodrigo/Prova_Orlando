<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrando as informações</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 18px sans-serif; text-align: center; padding: 90px; background-color: black; color: white;}
    </style>
</head>
<body>
<?php
    
    print_r($_POST);

    if ((  (isset($_POST["marca"])) && (isset($_POST["modelo"])) && (isset($_POST["placa"]))   )
        and
       (   ($_POST["marca"] != '') && ($_POST["modelo"] != '') && ($_POST["placa"] != '')   ))
    {
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $placa = $_POST["placa"];

            echo '<br> Gravado com sucesso <br/>';      

        if(!file_exists("registro.txt"))
        {
            $handle = fopen("registro.txt", "w");
        }

        else{
            $handle = fopen("registro.txt", "a");
        }

        fwrite($handle, "Marca: ".$marca. "   "."Modelo: ".$modelo. "   "."Placa: ".$placa."     "."\n");
        fflush($handle);
        fclose($handle);
    }
    else
    {
        echo 'Nao foi possível gravar, pois há campos em branco';
    }

    $arquivo = "registro.txt";
    $handle = fopen($arquivo, 'r');
    $ler = fread($handle, filesize("registro.txt"));
    echo $ler;
    fclose($handle);

?>
</body>
</html>