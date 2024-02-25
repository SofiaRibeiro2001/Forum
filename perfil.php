<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Gestão de Utilizadores</title>
    </head>
    <body class="fundo">
        <h1>Alterar Dados Pessoais</h1>
        <hr><br>
        <?php
        include 'valida.php';
        include 'liga_bd.php';
        
        $sql="SELECT * FROM t_user WHERE id=".$_SESSION['id'];
        $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
        $linha=mysqli_fetch_assoc($resultado);
        ?>
        <form action="perfil2.php" method="post">
            <p>Id: <input type="text" name="id" size="10" readonly value="<?php echo $linha['id']?>"></p>
            <p>Nick: <input type="text" name="nick" size="20" readonly value="<?php echo $linha['nick']?>"></p>
            <p>Nome: <input type="text" name="nome" size="100" required value="<?php echo $linha['nome']?>"></p>
            <p>E-mail: <input type="email" name="email" size="50" required value="<?php echo $linha['email']?>"></p>
            <p>Data de Nascimento: <input type="date" name="data_nasc" size="10" required value="<?php echo $linha['data_nasc']?>"></p>
            Pass: <input type="password" name="pass" size="20" required value="<?php echo $linha['pass']?>"></p>
            Foto(url):
            <p><input type="textarea" name="foto" size="200" value="<?php echo $linha['foto']?>"></p>
            <br>
            
            <input type="submit" value="Alterar" class="botao">
            <br><br>
            <a href="login2.php" targt="_self" class="botao">Voltar ao menu</a>
        </form>
        <?php
        mysqli_close($ligacao);
        ?>
    </body>
</html>