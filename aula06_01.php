<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 06_01</title>
</head>
<body>
    <h1>Aula 06_01 - 17/09/25 </h1>
    <h2> Operadores Aritméticos </h2>

    <?php
        $a=10;
        $b=2;

        echo "Adição:" .($a + $b);
        echo "<br>Subtração:" .($a - $b);
        echo "<br>Multiplicação:" .($a * $b);
        echo "<br>Divisão:" .($a / $b);
        echo "<br>Módulo:" .($a % $b);
        echo "<br>Exponenciação:" .($a ** $b);
    ?>

    <h2> Operadores de atribuição </h2>

    <?php
        $a=10;
        $b=2;
        $a+=$b;
        $b-=5;
        echo "a = ".$a;
        echo "<br>b = ".$b;
        $c=11;
        $d=6;
        $c%=$d;
        $d+=$a;
        echo "<br>c = ".$c;
        echo "<br>d = ".$d;
    ?>

    <h2> Operador de string </h2>
    <?php
        $a = "Maria ";
        echo "$a <br>";
        $b = "Leopoldina ";
        echo "$b <br>";
        echo $a . $b;
        $b .= $a;
        echo "<br>$b"; 
    ?>

    <h2> Operadores de incremento/decremento </h2>
    <?php
        $x = 100;
        echo "x = ".$x++;
        echo "<br>x final = ".$x;
        echo "<hr>";
        $i=10;
        echo "<br>i = $i";
        $i++;
        $i++;
        ++$i;
        ++$i;
        echo "<br>i = $i";
        $i--;
        $i--;
        --$i;
        echo "<br>i = $i";
    ?>

    <h2> Operador de comparação</h2>
    <?php
        $a=10;
        $b="10";
        echo "Igualdade = ".($a==$b)."<br>";
        echo "Idêntico = ".($a===$b)."<br>";
        echo "Não igual = ".($a!=$b)."<br>";
        echo "Não Idêntico = ".($a!==$b)."<br>";
    ?>

    <hr>

    <?php
        $a=10;
        $b=10;
        $c=11;
        echo "Menor: ".($a<$b)."<br>";
        echo "Menor ou igual: ".($a<=$b)."<br>";
        echo "Maior: ".($c>$b)."<br>";
        echo "Maior ou igual: ".($c>=$b)."<br>";
    ?>

    echo "<br><br><br><br><br>";
</body>
</html>