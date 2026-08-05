<?php
$valor1 = $_POST["valor1"] ?? 0;
$valor2 = $_POST["valor2"] ?? 0;

$soma = $valor1 + $valor2;
echo "A soma de $valor1 e $valor2 é = $soma";