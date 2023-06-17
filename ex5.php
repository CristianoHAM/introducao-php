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
        $vetor = array(4, 3, 6, 4, 8, 1, 10, 9, 2, 11);
        sort($vetor);
        for ($i = 0; $i < 10; $i++) {
            echo $vetor[$i] . "<br>";
        }

        ?>
    </div>
</body>

</html>