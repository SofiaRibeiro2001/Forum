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
    $sql = "SELECT * FROM t_tema";
    $resultado = mysqli_query($ligacao, $sql) or die(mysqli_error($ligacao));
    ?>
        <h1>Inserir Posts</h1><br>

        <form action="inserirP2.php" method="POST">
            Id user: <input type="text" size="20" name="id" readonly value="<?php echo $_SESSION['id']?>"><br><br>
            Tema: <select name="tema">
                <?php
                while($linha = mysqli_fetch_assoc($resultado))
                    echo "<option value='".$linha['tema']."'>".$linha['tema']."</option>";
            mysqli_close($ligacao);
            ?>
            </select>
            <br><br>
            Título: <input type="text" size="50" name="titulo" required><br><br>
            Texto:<textarea cols="80" rows="4" name="texto" required></textarea><br><br>
            Foto (url):<br><textarea cols="80" rows="4" name="foto"></textarea><br><br>

            <input type="submit" value="Colocar Post" class="botao"><br><br>
            <input type="reset" value="Limpar" class="botao"><br><br>
            <input type="button" value="Voltar" onclick="window.history.go(-1)" class="botao">
        </form>
    </body>
</html>