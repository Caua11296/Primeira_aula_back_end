<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP - Formulário</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f4f9; }
        .container { max-width: 500px; background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        label { font-weight: bold; }
        textarea { width: 100%; height: 100px; margin-top: 8px; margin-bottom: 15px; padding: 8px; box-sizing: border-box; }
        button { background-color: #0056b3; color: white; border: none; padding: 10px 15px; border-radius: 4px; cursor: pointer; }
        button:hover { background-color: #003d82; }
        .resultado { margin-top: 25px; padding: 15px; border-left: 4px solid #0056b3; background-color: #eef5fc; }
    </style>
</head>
<body>

<div class="container">
    <h2>Submissão de Registo</h2>

    <!-- Formulário HTML -->
    <form method="POST" action="">
        <label for="mensagem">Escreva o seu texto ou mensagem:</label>
        <textarea id="mensagem" name="mensagem" required></textarea>
        <button type="submit" name="enviar">Processar Dados</button>
    </form>

    <?php
    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['enviar'])) {
        
        // Define o fuso horário
        date_default_timezone_set('Europe/Lisbon');

        // Recebe o texto introduzido pelo utilizador
        $textoUtilizador = trim($_POST['mensagem']);

        // 1. Função date() - Obtém a data e hora exatas do envio
        $dataEnvio = date('d/m/Y \à\s H:i:s');

        // 2. Função rand() - Gera um número de protocolo aleatório entre 10000 e 99999
        $protocolo = rand(10000, 99999);

        // 3. Função strlen() - Conta a quantidade de carateres do texto enviado
        $totalCarateres = strlen($textoUtilizador);

        // Exibição dos resultados
        echo "<div class='resultado'>";
        echo "<h3>Comprovativo de Receção</h3>";
        echo "<p><strong>Protocolo (rand):</strong> #" . $protocolo . "</p>";
        echo "<p><strong>Data de Registo (date):</strong> " . $dataEnvio . "</p>";
        echo "<p><strong>Texto Enviado:</strong> " . htmlspecialchars($textoUtilizador) . "</p>";
        echo "<p><strong>Total de Carateres (strlen):</strong> " . $totalCarateres . " carateres</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>