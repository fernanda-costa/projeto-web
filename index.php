<?php 
    require_once("mostra-alerta.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vida Academica</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>

    <div class="d-flex justify-content-center align-items-center container-fluid">
        <div class="login col-lg-5 col-md-8 col-sm-12">
       
        <?php
            mostraAlerta("success");
            mostraAlerta("danger");
        ?>
            <form action="login.php" method="post">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="usuario">Nome de Usuario</label>
                    <input type="text" class="form-control" id="usuario" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" id="senha" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a class="ml-3" href="cadastro.php">Criar conta</a>
            </form>       
        </div>
    </div>

        <script src="js/index.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>