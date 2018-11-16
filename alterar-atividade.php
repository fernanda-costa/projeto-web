<?php
require_once("banco-atividade.php");

$nome = $_POST['nome'];
$dataEntrega = $_POST['dataEntrega'];
$valor = $_POST['valor'];
$materia_id = $_POST['materia_id'];
$descricao = $_POST['descricao'];
$id = $_POST['id'];

if (alterarAtividade($conexao, $id, $nome, $dataEntrega, $descricao, $valor, $materia_id)) {
    header("Location: lista-atividade.php");
    $_SESSION["success"] = "Atividade alterada com sucesso!";
} else {
    $msg = mysqli_error($conexao);
    header("Location: lista-atividade.php");
    $_SESSION["danger"] = "Ocorreu um erro na alteração da atividade. Favor tentar novamente! " 
    . $id. $dataEntrega. $nome. $valor. $descricao . $materia_id;
}
die();


?>