<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 08</title>
</head>
<body>
    <h1>Introdução à programação backend</h1>

    <?php
        echo '<p>Olá, José</p>';

        $ano_nascimento = 1992;
        $ano_atual = 2024;
        $idade = $ano_atual - $ano_nascimento;

        echo '<p>Você possui ' . $idade . ' anos.</p>';
    ?>

    <br>
    <a href="formulario.php">Ir para o formulário</a>
</body>
</html>