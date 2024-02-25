<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Forum dos Programadores - SR</title>
    </head>
    <body class="fundo">
        <?php
        include 'valida.php';
        ?>
        <h1>Pesquisa de Utilizadores</h1>
        <form action="pesquisar_U2.php" method="post">
            Qual o campo a pesquisar: <select name="campo">
                <option value="nick">Nick </option>
                <option value="nome">Nome </option>
                <option value="email">E-mail </option>
                <option value="data_nasc">Data de Nascimento </option>
            </select><br><br>
            Valor:<input type="text" size="50" name="valor" required><br><br>            
            <input type="submit" value="Pesquisar" class="botao">
            <br><br>
            <input type="reset" value="Limpar" class="botao">
            <br><br>
            <a href="login2.php" target="_self" class="botao">Voltar ao menu</a>
        </form>
    </body>
</html>