<?php
require_once("banco-atividade.php");
require_once("banco-usuario.php");

$nome = $_POST['nome'];
$dataEntrega = $_POST['dataEntrega'];
$valor = $_POST['valor'];
$materia_id = $_POST['materia_id'];
$descricao = $_POST['descricao'];



if (inserirAtividade($conexao, $nome, $dataEntrega, $descricao, $valor, $materia_id)) {
    header("Location: lista-atividade.php");
    $_SESSION["success"] = "Atividade Criada com sucesso!";
} else {
    $msg = mysqli_error($conexao);
    header("Location: form-atividade.php");
    $_SESSION["danger"] = "Ocorreu um erro na criação da atividaed. Favor tentar novamente! " . $msg;
}
die();


?>