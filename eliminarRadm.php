<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="refresh" content="3;url=login2.php" />
        <title>FORUM DO FRONTED</title>
    </head>
    <body class="fundo">
        <?php
        include 'liga_bd.php';
        
        $sql="UPDATE t_resp set apagado=".$_POST['motivo']." Where id =".$_POST['id_post'];

        if(mysqli_query($ligacao, $sql)){
            echo "<h1>Resposta REMOVIDA com sucesso!</h1>";
        }
        mysqli_close($ligacao);
        ?>
        <br><br>
        <input type="button" value="Continuar" onclick="window.history.go(-2);" class="botao">
    </body>
</html>