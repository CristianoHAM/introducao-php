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

    <b>Resultado</b>
    <div class="resultado">
        <?php
        $vida = 100;
        $dano = 80;
        function personagemMorreu($v, $d)
        {
            $v -= $d;
            if ($v <= 0) {
                return 1;
            } else {
                return 0;
            }
        }
        echo personagemMorreu($vida, $dano);
        ?>
    </div>
</body>

</html>