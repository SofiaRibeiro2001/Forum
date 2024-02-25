<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="styleLogin.css">
        <title> Forum dos Programadores</title>
    </head>
    <body class="outroFundo">
        <h1 class="titulo">FORUM DA TURMA</h1><br>
        <?php
        include 'valida.php';
        echo "<h2>Bem-Vindo ".$_SESSION['nick']."</h2>";
        ?>
        <br><br>
        <input type="button" value="Editar perfil" onclick="window.open('perfil.php','_self')" class="botao">
        <input type="button" value="Colocar posts" onclick="window.open('inserirP.php','_self')" class="botao">
        <input type="button" value="Listar posts" onclick="window.open('listar_P.php?tema=Todos','_self')" class="botao">
        <input type="button" value="Meus posts" onclick="window.open('meusP.php','_self')" class="botao">
        <input type="button" value="Minhas respostas" onclick="window.open('minhasR.php','_self')" class="botao">
        <input type="button" value="Logout" onclick="window.open('logout.php','_self')" class="botao">

        <?php
        if(strcmp($_SESSION['nick'], "admin")==0){
            ?>
            <br><br><br><h2>Área de Administração</h2>
            <input type="button" value="Gerir Utilizadores" onclick="window.open('gerir_u.php','_self')" class="botao">
            <input type="button" value="Pesquisar Utilizadores" onclick="window.open('pesquisar_U.php','_self')" class="botao">
            <input type="button" value="Gerir Post" onclick="window.open('gerir_P.php','_self')" class="botao">
            <input type="button" value="Gerir Respostas" onclick="window.open('gerir_R.php','_self')" class="botao">
            <?php
        }
        ?>
    </body>
</html>