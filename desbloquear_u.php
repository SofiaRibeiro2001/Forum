<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Gestão de Utilizadores</title>
        <meta http-equiv="refresh" content="3;url=gerir_u.php" />
    </head>
    <body class="fundo">
        <h1>Desbloquear Utilizadores</h1><br>
        <?php
        include 'liga_bd.php';

        $sql ="UPDATE t_user SET 
        apagado=0 WHERE id=$_POST[id]";
        
        if (mysqli_query($ligacao, $sql)){
            echo "<h3>Utilizador DESBLOQUEADO com SUCESSO</h3>";
        }
        mysqli_close($ligacao); echo "<br/>"
        ?>
        <h4> Aguarde que vai ser redirecionado</h4>
        <a href="gerir_u.php" target="_self" class="botao">Voltar</a>
    </body>
</html>