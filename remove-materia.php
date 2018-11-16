<?php
    require_once("banco-materia.php");

    $id = $_POST['id'];

    removeMateria($conexao, $id);
    header('Location: lista-materias.php');
    $_SESSION['success'] = "Produto removido com sucesso!";
    die();
?>


