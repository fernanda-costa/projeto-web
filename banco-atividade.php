<?php
require_once("conexao.php");

function inserirAtividade($conexao, $nome, $dataEntrega, $descricao, $valor, $materia_id){
    $nome = mysqli_real_escape_string($conexao, $nome);
    $descricao = mysqli_real_escape_string($conexao, $nome);

    $query = "INSERT INTO tbAtividade (nome, dataEntrega, descricao, valor, materia_id)
    VALUES ('{$nome}', '{$dataEntrega}', {$valor}, '{$descricao}', {$materia_id})";

    return mysqli_query($conexao, $query);
}

?>