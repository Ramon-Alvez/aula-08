<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <pre>
    <form action="formulario.php" method="POST">
        <label>Digite o seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-ZÉa-zé]+|(\s[A-ZÉa-zé]+)/gm"/>

        <label>Digite o seu telefone:</label>
        <input type="text" name="telefone" required patern="[\d]{10}"/>

        <label>Digite o seu email:</label>
        <input type="text" name="email" required patern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$"/>

        <input type="submit" value="Enviar para o servidor"/>
    </form>
    </pre>

    <hr/>

    <?php
        $nome = '';

        if (isset($_POST['nome'])) {
            $nome = $_POST['nome'];

            echo '<p>Olá, '. $nome .'! Seja bem-vindo(a)</p>';
        }
    ?>
</body>
</html>