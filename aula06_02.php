<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 05_03</title>
</head>
<body>
    <h1>Aula 06_02 - 17/09/25 </h1>
    <form method="post" action="aula06_02.php">
        Numero 1 <input type="inteiro" name="num1"><br>
        <br>
        Numero 2 <input type="inteiro" name="num2"><br>
        <br>
        <input type="submit" value="Calcular!!">
    </form>

    <?php

    $num1=$_POST["num1"];
    $num2=$_POST["num2"];

    if ($num1 && $num2) {
        echo "$num1 + $num2 = " .($num1 + $num2);
        echo "<br>$num1 - $num2 = " .($num1 - $num2);
        echo "<br>$num1 * $num2 = " .($num1 * $num2);
        echo "<br>$num1 / $num2 = " .($num1 / $num2);
        echo "<br>$num1 % $num2 = " .($num1 % $num2);
        echo "<br>$num1 ** $num2 = " .($num1 ** $num2);
    }
    ?>
</body>
</html>