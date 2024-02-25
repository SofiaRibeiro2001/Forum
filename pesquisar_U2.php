<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Gestão de Utilizadores</title>
    </head>
    <body class="fundo">
        <h1>Pesquisar Utilizadores</h1><br>
        <?php
        include 'liga_bd.php';
        
        switch($_POST['campo']){
            case 'nick':
                $sql="SELECT * FROM t_user WHERE nick LIKE '%$_POST[valor]%'";
                $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
                while($linha=mysqli_fetch_assoc($resultado)){
                    if ($linha['apagado']==1)
                        echo "<b>Nick: </b>" . $linha['nick']."<br>";
                        echo "<b>Nome: </b>" . $linha['nome']."<br>";
                        echo "<b>Email: </b>" . $linha['email']."<br>";
                        echo "<b>Data de nascimento: </b>" . $linha['data_nasc']."<br>";
                        echo "<img height='100' src='". $linha['foto']."'><br>";
                        echo "<br>";
                }
                mysqli_close($ligacao);
                break;

            case 'nome':
                $sql="SELECT * FROM t_user WHERE nome LIKE '%$_POST[valor]%'";
                $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
                while($linha=mysqli_fetch_assoc($resultado)){
                    if ($linha['apagado']==1)
                        echo "<b>Nick: </b>" . $linha['nick']."<br>";
                        echo "<b>Nome: </b>" . $linha['nome']."<br>";
                        echo "<b>Email: </b>" . $linha['email']."<br>";
                        echo "<b>Data de nascimento: </b>" . $linha['data_nasc']."<br>";
                        echo "<img height='100' src='". $linha['foto']."'><br>";
                        echo "<br>";
                }
                mysqli_close($ligacao);
                break;
                
            case 'email':
                $sql="SELECT * FROM t_user WHERE email LIKE '%$_POST[valor]%'";
                $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
                    while($linha=mysqli_fetch_assoc($resultado)){
                        if ($linha['apagado']==1)
                            echo "<b>Nick: </b>" . $linha['nick']."<br>";
                            echo "<b>Nome: </b>" . $linha['nome']."<br>";
                            echo "<b>Email: </b>" . $linha['email']."<br>";
                            echo "<b>Data de nascimento: </b>" . $linha['data_nasc']."<br>";
                            echo "<img height='100' src='". $linha['foto']."'><br>";
                            echo "<br>";
                    }
                    mysqli_close($ligacao);
                    break;
                    
            case 'data_nasc':
                $sql="SELECT * FROM t_user WHERE data_nasc LIKE '%$_POST[valor]%'";
                $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
                while($linha=mysqli_fetch_assoc($resultado)){
                    if ($linha['apagado']==1)
                        echo "<b>Nick: </b>" . $linha['nick']."<br>";
                        echo "<b>Nome: </b>" . $linha['nome']."<br>";
                        echo "<b>Email: </b>" . $linha['email']."<br>";
                        echo "<b>Data de nascimento: </b>" . $linha['data_nasc']."<br>";
                        echo "<img height='100' src='". $linha['foto']."'><br>";
                        echo "<br>";
                }
                mysqli_close($ligacao);
                break;
                
            default:
                break;
        }

        ?>
        <br><br>
        <a href="login2.php" target="_self" class="botao">Voltar</a>
    </body>
</html>