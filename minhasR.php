<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>FORUM DO FRONTED</title>
    </head>
    <body class="fundo">
        <h1>Minhas Respostas</h1>
        <?php
        include 'valida.php';
        include 'liga_bd.php';
        
        $sql="SELECT * FROM t_resp WHERE id_user=".$_SESSION['id'];
        $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
        $numreg=0;
        while($linha=mysqli_fetch_assoc($resultado))
        {
            if ($linha['apagado']==0)
                echo "<font color='black'>";
            else
                echo "<font color='red'>";
            echo "<b>Texto: </b>" . $linha['texto']."<br>";
            echo "<b>Foto:</br><br> <img src='" . $linha['foto']."' height='100'><br><br>";
            echo "</font>";
            if ($linha['apagado']==0){
                ?>
                <form action="eliminarR.php" method="post">
                    <input type="hidden" value="<?php echo $linha['id']?>" name="id_post">
                    <input type="submit" value="Eliminar Comentario" class="botao">
                </form>
                <?php
            } if ($linha['apagado']==1){
                ?>
                <form action="recuperarR.php" method="post">
                    <input type="hidden" value="<?php echo $linha['id']?>" name="id_post">
                    <input type="submit" value="Recuperar Comentario" class="botao">
                </form>
                <?php
            } if ($linha['apagado']>1)
                echo "<marquee><h1>Comentario Bloqueado pelo Admin </h1></marquee>";
            echo "<hr>";
            $numreg = $numreg+1;
        }
        echo "N. de Comentarios > " . $numreg;
        mysqli_close($ligacao); 
        ?>
        <br><br>
        <input type="button" value="Voltar ao menu" onclick="window.history.go(-1);" class="botao">
    </body>
</html>