<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2>cristiano</h2>
    <p>exercicio 1</p><br>
    
    <form action="" method="post">
        <input type="number" name="n1" id="">
        <input type="number" name="n2" id="">
        <input type="number" name="n3" id="">

        <input type="submit" value="enviar" name="enviar">
    </form>
    
    <b>Resultado</b>
    <div class="resultado">
        <?php
       // echo var_dump($_POST);

        if (isset($_POST["enviar"])){
            echo $_POST["n1"]. "<br>";
            echo $_POST["n2"]. "<br>";
            echo $_POST["n3"]. "<br>";
           // echo $_POST["n1"]+$_POST["n2"]+$_POST["n3"];
        }else{
            echo "<br>";
            echo "<br>";
            echo "<br>";
        }

        //sem entrada de dados
/*
        $numero1 = 10;
        $numero2 = 11;
        $numero3 = 12;
        echo $numero1 . "<br>";
        echo $numero2 . "<br>";
        echo $numero3 . "<br>";
        */
        ?>
    </div>
</body>

</html>