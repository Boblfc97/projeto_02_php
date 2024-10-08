<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="caixa_login">
        <h4>Login no sistema</h4>
        <form action="fazer_login.php" method="post">
            <input  type="text"
                    name="usuario_digitado"
                    placeholder="USUÁRIO">
            <br><br>
            <input  type="password"
                    name="senha_digitada"
                    placeholder="SENHA">
            <br><br>
            <?php
                echo isset($_GET['erro1'])?
                "<span>Usuário e/ou senha <br> incorretos</span><br><br>"
                :"";
                echo isset($_GET['erro2'])?
                "<span>Você precisa estar <br> logado!</span><br><br>"
                :"";
            ?>
            <button type="submit">Entrar</button>
        </form>


    </div>
</body>
</html>