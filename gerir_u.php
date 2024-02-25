<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Gestão de Utilizadores</title>
    </head>
    <body class="fundo">
        <h1>Gerir Utilizadores</h1><br>
        <?php
        include 'liga_bd.php';
        include 'valida.php';

        $sql="SELECT * FROM t_user";
        $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
        $num_reg=0;
        $num_bloq=0;

        while($linha=mysqli_fetch_assoc($resultado))
        {
            if ($linha['apagado']==1)
                echo "<div style='background-color: lavenderblush'>"; //colocar cor de fundo
            echo "Id: " . $linha['id']."<br>";
            echo "Nick: " . $linha['nick']."<br>";
            echo "Nome: " . $linha['nome']."<br>";
            echo "Email: " . $linha['email']."<br>";
            echo "Data de nascimento: " . $linha['data_nasc']."<br>";
            echo "Foto:<br> <img height='100' src='". $linha['foto']."'><br>";

            echo "<form action='alterar_u.php' method='post'>";
            echo "<input type='hidden' name='id' value='".$linha['id']. "'>";
            echo "<input type='submit' value='Alterar'></form>";

            if ($linha['apagado']==0){
                echo "<form action='bloquear_u.php' method='post'>";
                echo "<input type='hidden' name='id' value='".$linha['id']. "'>";
                echo "<input type='submit' value='Bloquear'></form>";
            }
            else
            {
                echo "<form action='desbloquear_u.php' method='post'>";
                echo "<input type='hidden' name='id' value='".$linha['id']. "'>";
                echo "<input type='submit' value='Desbloquear'></form>";
                echo "</div>";
                $num_bloq++;
            }
            echo "<hr/>";
            $num_reg=$num_reg+1;
        }
        mysqli_close($ligacao);
        echo "<br/>";
        echo "<b>Numero de utilizadores na base de dados -> " . $num_reg . "</b>";
        echo "<br/>";
        echo "<b>Numero de utilizadores bloqueados -> " . $num_bloq . "</b>";

        ?>
        <br><br>
        <a href="login2.php" target="_self" class="botao">Voltar</a>
    </body>
</html>