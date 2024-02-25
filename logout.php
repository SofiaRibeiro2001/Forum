<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5;url=index.html"/>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Forum do Fronted</title>
    </head>
    <body class="fundo">
        <?php
        include 'valida.php';
        $_SESSION=array();
        session_destroy();
        ?>
        <h2 align="center">Sessão Termina com Sucesso!</h2>
        <input type="button" value="Voltar ao inicio" onclick="window.open('index.html','_self')" class="botao">
    </body>
</html>