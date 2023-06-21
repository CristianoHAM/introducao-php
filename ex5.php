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
        <input type="number" name="p1"><br>
        <input type="number" name="p2"><br>
        <input type="number" name="p3"><br>
        <input type="number" name="p4"><br>
        <input type="number" name="p5"><br>
        <input type="number" name="p6"><br>
        <input type="number" name="p7"><br>
        <input type="number" name="p8"><br>
        <input type="number" name="p9"><br>
        <input type="number" name="p10"><br>
        <input type="submit" value="enviar" name="enviar">
    </form>

    <b>Resultado</b>
    <div class="resultado">
        <?php
        if(isset($_POST['enviar'])){

            $vetor = array_fill(0, 10, null);

            for ($i=0; $i <10 ; $i++) { 
                
                $vetor[$i]= intval($_POST['p'.($i+1)]);
            }
            
            sort($vetor);
            
            for ($i = 0; $i < 10; $i++) {
                echo $vetor[$i] . "<br>";
            }
        }

        ?>
    </div>
</body>

</html>