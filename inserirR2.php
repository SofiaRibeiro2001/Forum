<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta http-equiv="refresh" content="2;url=login2.php" />
        <title>FORUM DO FRONTED</title>
    </head>
    <body class="fundo">
        <?php
        include 'liga_bd.php';
         
        $sql = "INSERT INTO t_resp (id_post, id_user, texto, foto) VALUES 
        ($_POST[id_post], $_POST[id_user], '$_POST[texto]', '$_POST[foto]')";

        
        if (mysqli_query($ligacao, $sql)){
            echo "<h1> Resposta colocado com sucesso!</h1>";
        }
        mysqli_close($ligacao); echo "<br/>"
        ?>
        <input type="button" value="Continuar" onclick="window.history.go(-2)" class="botao">
    </body>
</html>