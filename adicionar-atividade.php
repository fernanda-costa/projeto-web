<?php
require_once("banco-atividade.php");
require_once("banco-usuario.php");

$nome = $_POST['nome'];
$dataEntrega = $_POST['dataEntrega'];
$valor = $_POST['valor'];
$materia_id = $_POST['materia_id'];
$usuario = getUsuarioId($conexao);


if (inserirAtividade($conexao, $nome, $nomeProfessor, $periodo, $cargaHoraria, $usuario['id'])) {
    header("Location: lista-materias.php");
    $_SESSION["success"] = "Atividade Criada com sucesso!";
} else {
    $msg = mysqli_error($conexao);
    header("Location: materia-form.php");
    $_SESSION["danger"] = "Ocorreu um erro na criação da atividaed. Favor tentar novamente! " . $msg;
}
die();


?>