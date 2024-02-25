<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5;url=index.html" />
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Forum dos Programadores</title>
    </head>
    <body class="fundo">
        <h1>Registo</h1><br>
        <?php

        include 'liga_bd.php';
        // instrução para adicionar
        $tmp=password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $sql="INSERT INTO t_user (nick, nome, email, data_nasc, pass, foto) VALUES
        ('$_POST[nick]','$_POST[nome]','$_POST[email]', '$_POST[data_nasc]','".$tmp."','$_POST[foto]')";
        
        if (mysqli_query($ligacao, $sql)){
            echo "<h1> Registo efetuado com sucesso!</h1>";
        }
        mysqli_close($ligacao); echo "<br/>"
        ?>
        <h4> Aguarde que vai ser redirecionado</h4>
        <a href="index.html" target="_self" class="botao">Voltar</a>
    </body>
</html>