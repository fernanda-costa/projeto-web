<?php
require_once("banco-materia.php");
require_once("banco-usuario.php");


$nome = $_POST['nome'];
$nomeProfessor = $_POST['nomeProfessor'];
$periodo = $_POST['periodo'];
$cargaHoraria = $_POST['cargaHoraria'];
$produto = getUsuarioId($conexao);

if (inserirMateria($conexao, $nome, $nomeProfessor, $periodo, $cargaHoraria, $produto['id'])) {
    header("Location: lista-materias.php");
    $_SESSION["success"] = "Materia Criada com sucesso!";
} else {
    $msg = mysqli_error($conexao);
    header("Location: materia-form.php");
    $_SESSION["danger"] = "Ocorreu um erro na criação da materia. Favor tentar novamente!" . $id;
}
die();


?>