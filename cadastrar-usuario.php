<?php
    require_once("banco-usuario.php");
    require_once("logica-usuario.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $curso = $_POST['curso'];

    if (inserirUsuario($conexao, $nome, $email, $senha, $curso)) {
        logaUsuario($email);
        header("Location: home.php");
        $_SESSION["success"] = "Conta Criada com sucesso!";
    } else {
        $msg = mysqli_error($conexao);
        header("Location: cadastro.php");
        $_SESSION["danger"] = "Ocorreu um erro na criação da conta. Favor tentar novamente!" . $msg;
    }

?>