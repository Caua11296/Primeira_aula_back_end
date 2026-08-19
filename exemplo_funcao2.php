<?php
//DEFINIÇÃO DA FUNÇÃO:
function nomeDaFuncao($parametro1, $parametro2)
{
    //Codigo que sera executado
    $resultado = $parametro1 + $parametro2;
    return $resultado; // retorna um valor

}

// Chamando a função
$soma = nomeDaFuncao(5, 10);
echo "O resultado  é: " . $soma;
?>