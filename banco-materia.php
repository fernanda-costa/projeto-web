<?php
require_once("conexao.php");

function inserirMateria($conexao, $nome, $nomeProfessor, $periodo, $cargaHoraria, $id){
    $nome = mysqli_real_escape_string($conexao, $nome);
    $nomeProfessor = mysqli_real_escape_string($conexao, $nomeProfessor);

    $query = "INSERT INTO tbMateria (nome, nomeProfessor, periodo, cargaHoraria, id_usuario)
    VALUES ('{$nome}', '{$nomeProfessor}', '{$periodo}', {$cargaHoraria}, {$id})";

    return mysqli_query($conexao, $query);
}

?>