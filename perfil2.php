<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="refresh" content="3;url=login2.php" />
        <title>Gestão de Utilizadores</title>
    </head>
    <body class="fundo">
        <h1>Alterar Utilizadores</h1>
        <br><br>
        <?php
        include 'valida.php';
        include 'liga_bd.php';

        $sql ="UPDATE t_user SET
        nome='$_POST[nome]',
        email='$_POST[email]',
        data_nasc='$_POST[data_nasc]',
        pass='$_POST[pass]',
        foto='$_POST[foto]' WHERE id=".$_SESSION['id'];

        if (mysqli_query($ligacao, $sql)){
            echo "<h3>Utilizador alterado com SUCESSO</h3>";
        }
        mysqli_close($ligacao); echo "<br/>"
        ?>
        <h4> Aguarde que vai ser redirecionado</h4>
        <a href="login2.php" target="_self" class="botao">Voltar</a>
    </body>
</html>