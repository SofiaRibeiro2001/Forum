<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>FORUM DO FRONTED</title>
    </head>
    <body class="fundo">
        <?php
        include 'liga_bd.php';
         
        $sql="SELECT * FROM t_resp";
        $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
        $numreg=0;

        while($linha=mysqli_fetch_assoc($resultado))
        {
            if ($linha['apagado']==0)  //cor
                echo "<font color='black'>";
            else if ($linha['apagado']==2)
                echo "<font color='#d42626'>";
            else if ($linha['apagado']==3)
                echo "<font color='#67177a'>";
            else if ($linha['apagado']==4)
                echo "<font color='#115273'>";
            else if ($linha['apagado']==5)
                echo "<font color='#bcbf0d'>";
            else if ($linha['apagado']==6)
                echo "<font color='#e68115'>";

            echo "<b>Texto: </b>" . $linha['texto']."<br>";
            echo "<b>Foto:</br><br> <img src='" . $linha['foto']."' height='100'><br><br>";

            $sql2="SELECT * FROM t_user WHERE id=" . $linha['id_user'];
            $resultado2=mysqli_query($ligacao, $sql2) or die (mysqli_error($ligacao));
            $linha2=mysqli_fetch_assoc($resultado2);
            echo "<h3>Nick: " . $linha2['nick']."</h3>";
            
            if ($linha['apagado']==0){
            ?>
            <form action="eliminarRadm.php" method="post">
                <select name="motivo">
                    <option  value="2">Violência</option>
                    <option  value="3">Pornografia</option>
                    <option  value="4">Racismo</option>
                    <option  value="5">Publicidade</option>
                    <option  value="6">Outros</option>
                </select>
                <input type="hidden" value="<?php echo $linha['id']?>"name="id_post">
                <input type="submit" value="Eliminar Resposta">
            </form>
            <?php
            } else {
                ?>
                <form action="recuperarR.php" method="post">
                    <input type="hidden" value="<?php echo $linha['id']?>"name="id_post">
                    <input type="submit" value="Recuperar Resposta">
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