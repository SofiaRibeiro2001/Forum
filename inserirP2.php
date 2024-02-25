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
         
        $sql="INSERT INTO t_post (tema, titulo, texto, foto, id_user) VALUES
        ('$_POST[tema]','$_POST[titulo]','$_POST[texto]', '$_POST[foto]', $_POST[id])";
        
        if (mysqli_query($ligacao, $sql)){
            echo "<h1> Post colocado com sucesso!</h1>";
        }
        mysqli_close($ligacao); echo "<br/>"
        ?>
        <input type="button" value="Continuar" onclick="window.history.go(-2)" class="botao">
    </body>
</html>