<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>FORUM DO FRONTED</title>
    </head>
    <body class="fundo">
        <?php
        
        include 'liga_bd.php';
         
        $sql="SELECT * FROM t_post";
        $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
        $numreg=0;

        while($linha=mysqli_fetch_assoc($resultado))
        {
            if ($linha['apagado']==0)  //cor
                echo "<font color='black'>";
            else
                echo "<font color='red'>";
            echo "<h3>Id: " . $linha['id']."</h3>";
            echo "<b>Tema:</b> " . $linha['tema']."<br>";
            echo "<b>Titulo:</b> " . $linha['titulo']."<br>";
            echo "<b>Texto:</b> " . $linha['texto']."<br>";
            echo "<b>Foto:</br><br> <img src='" . $linha['foto']."' height='100'><br>";

            $sql2="SELECT * FROM t_user WHERE id=" . $linha['id_user'];
            $resultado2=mysqli_query($ligacao, $sql2) or die (mysqli_error($ligacao));
            $linha2=mysqli_fetch_assoc($resultado2);
            echo "<h3>Nick: " . $linha2['nick']."</h3>";
            
            
            if ($linha['apagado']==0){
            ?>
            <form action="eliminarPadm.php" method="post">
                <select name="motivo">
                    <option  value="2">Violência</option>
                    <option  value="3">Pornografia</option>
                    <option  value="4">Racismo</option>
                    <option  value="5">Publicidade</option>
                    <option  value="6">Outros</option>
                </select>
                <input type="hidden" value="<?php echo $linha['id']?>"name="id_post">
                <input type="submit" value="Eliminar Post">
            </form>
            <?php
            } else {
                ?>
                <form action="recuperarP.php" method="post">
                    <input type="hidden" value="<?php echo $linha['id']?>"name="id_post">
                    <input type="submit" value="Recuperar Post">
                </form>
                <?php
            }

            echo "<hr>";
            $numreg=$numreg+1;
        }
        echo "N. de Postagens>" . $numreg;
        mysqli_close($ligacao);
        ?>
        <br><br>
        <input type="button" value="Voltar ao menu" onclick="window.history.go(-1);" class="botao">
    </body>
</html>