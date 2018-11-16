<?php
    require_once("banco-atividade.php");

    $id = $_POST['id'];

    removeAtividade($conexao, $id);
    header('Location: lista-atividade.php');
    $_SESSION['success'] = "Atividade removida com sucesso!";
    die();
?>


