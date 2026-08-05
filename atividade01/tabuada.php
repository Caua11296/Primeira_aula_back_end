
<?php

/*faça um codigo em que calcule a tabuada do número indicado em uma variavel
com o nome de $tabuada, aplique o laço de repetiçao FOR */


$tabuada = $_GET["tabuada"] ?? '' ;
for ($i = 1; $i <= 20; $i++) {
    $resultado = $tabuada * $i;
    echo $tabuada . " x " . $i . " = " . $resultado . "<br>";
}
?>