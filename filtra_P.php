<?php
    $tema="SELECT distinct (tema) FROM t_post WHERE apagado=0 ORDER BY tema";
    $tema_res = mysqli_query($ligacao, $tema) or die (mysqli_error($ligacao));
    echo "<h1>Listagem de Posts -". $_GET['tema']."</h1>";
    echo "<form action='listar_P.php' method='get' align='rigth'>";
    echo "<select name='tema' align='rigth'>";
    echo "<option value='Todos'>Todos </option>";
    while($linha_tema=mysqli_fetch_assoc($tema_res))
    {
        echo "<option value'=".$linha_tema['tema']."'>".$linha_tema['tema']."</option>";
    }
    echo "</select>";
    echo "<input type='submit' value='Filtrar'>";
    echo "</form><br>";
    if(strcmp($_GET['tema'],"Todos")==0)
        $sql = "SELECT * FROM t_post WHERE apagado=0";
    else
        $sql = "SELECT * FROM t_post WHERE apagado=0 AND tema='".$_GET['tema']."'";
?>