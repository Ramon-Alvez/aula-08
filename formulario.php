<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <pre>
    <form action="formulario.php" method="post">
        <label>Digite seu nome:</label>
        <input type="text" name="nome" required minlength="2" pattern="^[A-Za-zé]+\s[A-Za-z]+"/> <br>
        <label>Digite seu telefone:</label>
        <input type="text" name="telefone" minlength="11" pattern="\d{2}\s\d{5}-\d{4}"/>

        <label>Digite seu email:</label>
        <input type="email" name="email"/>

        <input type="submit" value="Enviar para o servidor">
    </form>
    </pre>

    <hr/>

    <?php
        $nome = '';
        $telefone = '';
        $email = '';

        //Olá, <nome>! Seja bem-vindo(a).

        if(isset($_POST['nome'])){ //isset é uma função do PHP que verifica se há valor em uma variável

            //estamos atribuindo o valor do campo "nome" digitado no formulário
            //à nossa variável chamada $nome
            $nome = $_POST['nome']; 

            //Estamos imprimindo a mensagem de boas vindas. 
            //Concatenamos uma string constante com a variável "$nome"
            echo '<p>Olá, '. $nome .'! Seja bem-vindo(a)</p>';
        }

        if(isset($_POST['telefone'])){ 

            $telefone = $_POST['telefone']; 

            echo '<p>Telefone: '. $telefone .'</p>';
            // echo '<br>';
        }

        if(isset($_POST['email'])){

            $email = $_POST['email']; 

            echo '<p>email: '. $email .'</p>';
        }
    ?>
</body>
</html>