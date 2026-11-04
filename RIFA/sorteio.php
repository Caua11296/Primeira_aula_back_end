<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');


// guarda os ganhadores enquanto o navegador estiver aberto
if (!isset($_SESSION["ganhadores"])) {
    $_SESSION["ganhadores"] = array();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sorteio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <h1>Sortear Rifa</h1>


    <form method="post">
        Prêmio: <input type="text" name="premio">
        <button type="submit">Sortear</button>
    </form>


    <?php
    if (isset($_POST["premio"])) {
        $premio = htmlspecialchars($_POST["premio"]);


        if (count($_SESSION["ganhadores"]) >= 100) {
            echo "<h2>Todas as rifas já foram sorteadas!</h2>";
        } else {
            // sorteia de novo se o número já ganhou
            do {
                $numero = rand(1, 100);
            } while (isset($_SESSION["ganhadores"][$numero]));


            $_SESSION["ganhadores"][$numero] = $premio;


            echo "<h3>Prêmio: $premio</h3>";
            echo "<h3>Rifa premiada: $numero</h3>";
        }
    }
    ?>


    <p>Data e hora: <?php echo date("d/m/Y H:i:s"); ?></p>


    <h2>Ganhadores do sorteio !</h2>
    <table>
        <tr>
            <th>Rifa</th>
            <th>Prêmio</th>
        </tr>
        <?php
        foreach ($_SESSION["ganhadores"] as $rifa => $premio) {
            echo "<tr><td>$rifa</td><td>$premio</td></tr>";
        }
        ?>
    </table>


</body>
</html>