<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>FORUM DO FRONTED</title>
    </head>
    <body class="fundo">
        <?php
        include 'liga_bd.php';
        
        $sql="UPDATE t_resp set apagado=1 WHERE id=".$_POST['id_post'];
        
        if(mysqli_query($ligacao, $sql)){
            echo "<h1>Comentario REMOVIDO com sucesso!</h1>";
        }
        mysqli_close($ligacao);
        ?>
        <br><br>
        <input type="button" value="Continuar" onclick="window.history.go(-2);" class="botao">
    </body>
</html>