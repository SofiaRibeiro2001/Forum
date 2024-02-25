<html>
    <head>
        <meta charset="utf-8">
        <title> Forum dos Programadores</title>
    </head>
    <body>
        <h1>Validação dos Utilizadores</h1>
        <?php
        include 'liga_bd.php';
        
        if (session_status() !== PHP_SESSION_ACTIVE){
            $sql = "SELECT * FROM t_user WHERE nick='$_POST[nick]'";
            $resultado=mysqli_query($ligacao, $sql);
            $linha=mysqli_fetch_assoc($resultado);

            if ($linha==NULL)
                header('Location:erro.html');
            
            if (password_verify($_POST['pass'], $linha['pass'])==0){
                session_start();
                $_SESSION['id']=$linha['id'];
                $_SESSION['nick']=$linha['nick'];
                header('Location:login2.php');
            }
            
            else
                header('Location:erro.html');
        }
        mysqli_close($ligacao); echo "<br/>";
        ?>
    </body>
</html>