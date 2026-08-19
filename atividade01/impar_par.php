<?php
if (isset($_POST['numero'])) {
    $numero = $_POST['numero'];
    echo ParOuImpar($numero);
}
function ParOuImpar($numero)
{
    if ($numero % 2 == 0) {
        return "$numero é par.";
    } else {
        return "$numero é ímpar.";
    }
}