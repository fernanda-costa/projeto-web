<?php
require_once("banco-atividade.php");

$nome = $_POST['nome'];
$dataEntrega = $_POST['dataEntrega'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$id = $_POST['id'];

if (alterarMateria($conexao, $id, $nome, $dataEntrega, $descricao, $cargaHoraria)) {
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