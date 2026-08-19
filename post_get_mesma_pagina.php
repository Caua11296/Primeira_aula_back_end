<form method="POST" action="post_get_mesma_pagina.php">
    Cor: <br>
    <input type="text" name="cor" value=""> <br>
    Tipo: <br>
    <input type="text" name="tipo" value=""> <br>

    <input type="submit" value="cadastrar">

    <?php
    $cor = $_POST['cor'];
    $tipo = $_POST['tipo'];
    $produto = $_GET['produto'] ?? "(Não Selecionado)";


    if (isset($_POST['cor'])){
        echo "A cor do $produto é $cor do tipo  $tipo";
    }
    ?>