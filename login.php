<?php 
    require_once("banco-usuario.php");

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = buscaUsuario($conexao, $email, $senha);

    if($usuario == null) {
        header("Location: index.php");
        $_SESSION['danger'] = "Usuário ou senha inválido.";
    } else {
        logaUsuario($usuario["email"]);
        header("Location: home.php");
        $_SESSION['success'] = "Usuário logado com sucesso!.";
    }
    die();
    
?>