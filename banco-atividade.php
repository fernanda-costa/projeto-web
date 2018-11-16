<?php
require_once("conexao.php");

function inserirAtividade($conexao, $nome, $dataEntrega, $descricao, $valor, $materia_id){
    $nome = mysqli_real_escape_string($conexao, $nome);
    $descricao = mysqli_real_escape_string($conexao, $descricao);

    $query = "INSERT INTO tbAtividade (nome, dataEntrega, descricao, valor, materia_id)
    VALUES ('{$nome}', '{$dataEntrega}', '{$descricao}', {$valor}, {$materia_id})";

    return mysqli_query($conexao, $query);
}
function listarAtividades ($conexao) {
    $atividades = array(); 
    $query = "SELECT * FROM tbAtividade";
    $resultado = mysqli_query($conexao, $query);
    while($atividade = mysqli_fetch_assoc($resultado)){
        array_push($atividades, $atividade);
    }

    return $atividades;
}
function removeAtividade($conexao, $id){
    $query = "delete from tbAtividade where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscarAtividade($conexao, $id) {
    $query = "SELECT * FROM tbAtividade WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alterarAtividade($conexao, $id, $nome, $dataEntrega, $descricao, $valor, $materia_id) {
    $nome = mysqli_real_escape_string($conexao, $nome);
    $descricao = mysqli_real_escape_string($conexao, $descricao);

    $query = "update tbAtividade set nome = '{$nome}', dataEntrega = '{$dataEntrega}',
    descricao = '{$descricao}', valor = {$valor}, materia_id = {$materia_id} where id = {$id}";

    return mysqli_query($conexao, $query);
}

?>