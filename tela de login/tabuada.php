<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>
<body>
    <form method="POST" action="">
        Número: <input type="number" name="numero" required><br>
        <input type="submit" value="Calcular Tabuada">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = (int)$_POST['numero'];
        echo "<h3>Tabuada do $numero:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$numero x $i = " . ($numero * $i) . "<br>";
        }
    }
    ?>
</body> 
</html>