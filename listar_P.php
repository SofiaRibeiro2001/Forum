<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>FORUM DO FRONTED</title>
    </head>
    <body class="fundo">
        <?php
        
        include 'valida.php';
        include 'liga_bd.php';
        include 'filtra_P.php';

        //$sql="SELECT * FROM t_post WHERE apagado=0";
        $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
        $numreg=0;

        while($linha=mysqli_fetch_assoc($resultado))
        {
            echo "<h3>Id: " . $linha['id']."</h3>";
            echo "<b>Tema:</b> " . $linha['tema']."<br>";
            echo "<b>Titulo:</b> " . $linha['titulo']."<br>";
            echo "<b>Texto:</b> " . $linha['texto']."<br>";
            echo "<b>Foto:</br><br> <img src='" . $linha['foto']."' height='100'><br>";

            $sql2="SELECT * FROM t_user WHERE id=" . $linha['id_user'];
            $resultado2=mysqli_query($ligacao, $sql2) or die (mysqli_error($ligacao));
            $linha2=mysqli_fetch_assoc($resultado2);
            echo "<h3>Nick: " . $linha2['nick']."</h3>";
            ?>
            <form action="inserirR.php" method="post">
                <input type="hidden" value="<?php echo $linha['id']?>"name="id_post">
                <input type="submit" value="Ver Respostas / Responder" class="botao">
            </form>
            <?php
            echo "<hr>";
            $numreg=$numreg+1;
        }
        echo "N. de Postagens>" . $numreg;
        mysqli_close($ligacao);
        ?>
        <br><br>
        <a href="login2.php" target="_self" class="botao">Voltar</a>
    </body>
</html>