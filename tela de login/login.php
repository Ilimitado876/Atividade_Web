<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <form method="POST" action="">
        Nome: <input type="text" name="usuario" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usuario = htmlspecialchars($_POST['usuario']);
        $senha = htmlspecialchars($_POST['senha']);

        if ($usuario == "Joao" && $senha == "1234") {
            echo "Você está logado.";
        } else {
            echo "Usuário ou senha errados.";
        }
    }
    ?>
</body>
</html>