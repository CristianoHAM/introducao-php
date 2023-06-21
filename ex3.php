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
        vida:
        <input type="text" name="vida" id="">
        dano:
        <input type="text" name="dano" id="">
        <input type="submit" value="enviar" name="enviar">
    </form>


    <b>Resultado</b>
    <div class="resultado">
        <?php
        function personagemMorreu($v, $d)
        {
            $v -= $d;
            if ($v <= 0) {
                return 1;
            } else {
                return 0;
            }
        }
        if(isset($_POST['enviar'])){

            $vida = $_POST['vida'];
            $dano = $_POST['dano'];
            echo personagemMorreu($vida, $dano);
        }else{
            echo '<br>';
        }
        ?>
    </div>
</body>

</html>