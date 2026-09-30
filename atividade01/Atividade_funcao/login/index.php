<form action="login.php" method="post">
    <?php
    $msg = $_GET['msg'] ?? '';
    if ($msg) {
        echo "<p style='color: red;'>Usuário ou senha inválidos.</p>";
    }
    ?>
    Login <br>
    <input type= "text" name= "usuario"> <br>
    Senha <br>
    <input type= "password" name= "senha"> <br>
    <input type= "submit" value= "Entrar">
</form>
