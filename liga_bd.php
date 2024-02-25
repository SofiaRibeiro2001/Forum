<?php
    $servidor="localhost";
    $user="root";
    $senha="";
    $bd="bd_forum";

    $ligacao = mysqli_connect($servidor, $user, $senha, $bd);
        if ($ligacao->connect_error){
            die(mysqli_connect_error($ligacao));
        }
?>