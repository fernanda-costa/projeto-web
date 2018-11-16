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
    
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
</head>
<body>
<?php
            mostraAlerta("success");
            mostraAlerta("danger");
        ?>

<div class="container">
 <div class="row">
      <div class="col s12 l8 offset-l2">
            <form action="login.php" method="post">
                <h2>Login</h2>
                <div class="form-group">
                    <label for="usuario">Nome de Usuario</label>
                    <input type="text" class="form-control" name="email" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" placeholder="Senha">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a href="cadastro.php">Criar conta</a>
            </form>      
      </div>
    </div>
    </div>
             
 

        <script src="js/index.js"></script>
        <script src="js/jquery-3.3.1.min.js"></script>
</body>
</html>