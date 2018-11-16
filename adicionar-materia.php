<?php
require_once("banco-materia.php");
require_once("banco-usuario.php");


$nome = $_POST['nome'];
$nomeProfessor = $_POST['nomeProfessor'];
$periodo = $_POST['periodo'];
$cargaHoraria = $_POST['cargaHoraria'];
$usuario = getUsuarioId($conexao);


if (inserirMateria($conexao, $nome, $nomeProfessor, $periodo, $cargaHoraria, $usuario['id'])) {
    header("Location: lista-materias.php");
    $_SESSION["success"] = "Materia Criada com sucesso!";
} else {
    $msg = mysqli_error($conexao);
    header("Location: materia-form.php");
    $_SESSION["danger"] = "Ocorreu um erro na criação da materia. Favor tentar novamente! " . $periodo;
}
die();


?>