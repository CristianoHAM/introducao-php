<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Atividade 2</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <h2>cristiano</h2>
    <p>exercicio 1</p><br>

    <form action="" method="post">
        <input type="text" name="f" id="">
        <input type="submit" value="enviar" name="enviar">
    </form>

    <b>Resultado</b>
    <div class="resultado">
        <?php
        if (isset($_POST['f'])&& $_POST['f'] != ''){
        
            $F = intval($_POST['f']);
            $C = (($F - 32) * 5) / 9;
            echo "A temperatura em C° é =" . round($C, 2);
        }else{
            echo '<br>';
        }

        ?>
    </div>
</body>

</html>