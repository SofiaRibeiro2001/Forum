<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title> Alterar Utilizador</title>
    </head>
    <body class="fundo">
        <h1>Alteração do Utilizador</h1>
        <hr><br>

        <?php
        include 'liga_bd.php';
        
        $sql="SELECT * FROM t_user WHERE id=" .$_POST['id'];
        $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
        $linha=mysqli_fetch_assoc($resultado);
        ?>
        <form action="alterar_u2.php" method="post">
            <p>Id: <input type="text" name="id" size="5" value="<?php echo $linha['id']?>"readonly></p>
            <p>Nick: <input type="text" name="nick" size="20" value="<?php echo $linha['nick']?>"></p>
            <p>Nome: <input type="text" name="nome" size="100" value="<?php echo $linha['nome']?>"></p>
            <p>E-mail: <input type="email" name="email" size="50" value="<?php echo $linha['email']?>"></p>
            <p>Data de Nascimento: <input type="date" name="data_nasc" size="10" value="<?php echo $linha['data_nasc']?>"></p>
            Pass: <input type="password" name="pass" size="20" value="<?php echo $linha['pass']?>"></p>
            Foto(url):
            <p><input type="textarea" name="foto" size="200" value="<?php echo $linha['foto']?>"></p>
            <br>
            
            <input type="submit" value="Atualizar" class="botao">
            <br><br>
            <input type="reset" value="Limpar" class="botao">
            <br><br>
            <input type="button" value="Cancelar" onclick="window.history.go(-1);" class="botao">
        </form>
        <?php
        mysqli_close($ligacao);
        ?>
    </body>
</html>