<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2>cristiano</h2>
    <p>exercicio 1</p><br>
    <form action="" method="post">
        <input type="number" name="numero" id="">
        <input type="submit" value="enviar" name="enviar">
    </form>

    <b>Resultado</b>
    <div class="resultado">
        <?php
        if(isset($_POST['enviar']) && $_POST['numero'] != ''){

            $numero = $_POST['numero'];
            
            for ($i = 1; $i <= 10; $i++) {
                echo $numero * $i . "<br>";
            }
        }else{
            echo 'preencha os dados do formulario<br>';
        }

        ?>
    </div>

</body>

</html>