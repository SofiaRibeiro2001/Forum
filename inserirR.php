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
         
        $sql="SELECT * FROM t_post WHERE id=".$_POST['id_post'];
        $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
        $numreg=0;

        $linha=mysqli_fetch_assoc($resultado);
        echo "Id: " . $linha['id']."<br><br>";
        echo "Tema: " . $linha['tema']."<br><br>";
        echo "Titulo: " . $linha['titulo']."<br><br>";
        echo "Texto: " . $linha['texto']."<br><br>";
        echo "Foto:</br> <img src='" . $linha['foto']."' height='100'><br><br>";
        
        $sql2="SELECT * FROM t_user WHERE id=" . $linha['id_user'];
        $resultado2=mysqli_query($ligacao, $sql2) or die (mysqli_error($ligacao));
        $linha2=mysqli_fetch_assoc($resultado2);
        echo "Nick: " . $linha2['nick']."<br><br>";
        
        // Respostas ao post principal com utilizadores
        $numresp=0;
        $sql3="SELECT * FROM t_resp WHERE apagado=0 and id_post=".$linha['id'];
        $resultado3=mysqli_query($ligacao, $sql3) or die (mysqli_error($ligacao));
        echo "<table width='80%' align='center' border='1'>";

        while($linha3=mysqli_fetch_assoc($resultado3))
        {
            echo "<tr><td>".$linha3['texto']."</td>";
            echo "<td><img src='".$linha3['foto']."' height='100'></td>";
            $sql4="SELECT * FROM t_user WHERE id=".$linha3['id_user'];
            $resultado4=mysqli_query($ligacao, $sql4) or die (mysqli_error($ligacao));
            $linha4=mysqli_fetch_assoc($resultado4);
            echo "<td>".$linha4['nick']."</td></tr>";
            $numresp++;
        }
        echo "<tr><td colspan='3' align='center'>Total de respostas: ".$numresp."</td></tr>";
        echo "</table>";
        // Fim das Respostas

        ?>
        <h2>Responder ao Post</h2>
        <form action="inserirR2.php" method="POST" name="f1">
            <input type="hidden" size="20" maxlength="20" name="id_user" readonly value="<?php echo $_SESSION['id']?>">
            <input type="hidden" name="id_post" readonly value="<?php echo $linha['id']?>">
            Texto:<br><textarea cols="80" rows="4" name="texto"></textarea><br><br>
            Foto(url):<br><textarea cols="80" rows="4" name="foto"></textarea><br><br>

            <input type="submit" value="Responder" class="botao"><br><br>
            <input type="reset" value="Limpar" class="botao"><br><br>
        
        </form>
        <?php
        mysqli_close($ligacao);
        ?>
        <br><br>
        <input type="button" value="Voltar ao menu" onclick="window.history.go(-1);" class="botao">
    </body>
</html>