<?php
    require_once("banco-atividade.php");

    $id = $_POST['id'];

    removeMateria($conexao, $id);
    header('Location: lista-atividade.php');
    $_SESSION['success'] = "Produto removido com sucesso!";
    die();
?>


