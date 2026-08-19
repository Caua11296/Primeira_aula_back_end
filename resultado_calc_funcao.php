<?php
if (empty($_SERVER["REQUEST_METHOD"]) || $_SERVER["REQUEST_METHOD"]) {
    $num1 = $_POST['num1']; //recebe o valor do campo num1
    $num2 = $_POST['num2']; //recebe o valor do campo num2
    $num3 = $_POST['num3']; //recebe o valor do campo num3

    function media($num1, $num2, $num3)
    {
        if (isset($num1) || isset($num2) || isset($num3)) {
            $media = ($num1 + $num2 + $num3) / 3;
        }
        echo "Nenhuma nota foi digitada!.";
        $media = ($num1 + $num2 + $num3) / 3;
        echo "<h3> Cálculo da média </h3>";
        echo "<p> A média das notas: </p>" . "<br>";
        echo "--------------------------------------<br>";
        echo "Nota 1: " . $num1 . "<br>";
        echo "Nota 2: " . $num2 . "<br>";
        echo "Nota 3: " . $num3 . "<br>";
        echo "--------------------------------------<br>";
        echo "Média é: " . $media . "<br>";
        echo "--------------------------------------<br>";
    }
    media($num1, $num2, $num3);
} else {
    echo "Nenhuma nota foi digitada!.";
}
