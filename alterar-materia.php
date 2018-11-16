<?php
require_once("banco-materia.php");
require_once("banco-usuario.php");

$nome = $_POST['nome'];
$nomeProfessor = $_POST['nomeProfessor'];
$periodo = $_POST['periodo'];
$cargaHoraria = $_POST['cargaHoraria'];
$produto = getUsuarioId($conexao);
$id = $_POST['id'];

if (alterarMateria($conexao, $id, $nome, $nomeProfessor, $periodo, $cargaHoraria)) {
    header("Location: lista-materias.php");
    $_SESSION["success"] = "Materia alterada com sucesso!";
} else {
    $msg = mysqli_error($conexao);
    header("Location: lista-materias.php");
    $_SESSION["danger"] = "Ocorreu um erro na alteração da materia. Favor tentar novamente! " 
    . $id. $nome. $nomeProfessor. $periodo. $cargaHoraria;
}
die();


?>