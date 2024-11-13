<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Formulário de Nome</title>
</head>
<body>
    <form method="POST" action="">
        Nome: <input type="text" name="nome" required><br>
        Sobrenome: <input type="text" name="sobrenome" required><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $sobrenome = htmlspecialchars($_POST['sobrenome']);
        echo "<h3>Nome Completo:</h3>";
        echo "<input type='text' value='$nome $sobrenome' readonly>";
    }
    ?>
</body>
</html>