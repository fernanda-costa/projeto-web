<?php require_once("mostra-alerta.php")?>

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
        <div class="login col-lg-5 col-md-10 col-sm-12">
        
        <?php
            mostraAlerta("success");
            mostraAlerta("danger");
        ?>
            <h3 class="text-center">Criar Conta</h3>
            
            <form action="cadastrar-usuario.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" class="form-control">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha">
                    </div>
                </div>
                <div class="form-group">
                    <label for="curso">Curso</label>
                    <input type="text" class="form-control" name="curso">
                </div>
                <button type="submit" class="btn btn-primary">Criar conta</button>
                </form>   
            </div>
        </div>

   <script src="js/index.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
</body>
</html>