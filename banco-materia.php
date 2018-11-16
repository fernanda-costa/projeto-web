<?php
require_once("conexao.php");

function inserirMateria($conexao, $nome, $nomeProfessor, $periodo, $cargaHoraria, $id){
    $nome = mysqli_real_escape_string($conexao, $nome);
    $nomeProfessor = mysqli_real_escape_string($conexao, $nomeProfessor);

    $query = "INSERT INTO tbMateria (nome, nomeProfessor, periodo, cargaHoraria, id_usuario)
    VALUES ('{$nome}', '{$nomeProfessor}', '{$periodo}', {$cargaHoraria}, {$id})";

    return mysqli_query($conexao, $query);
}

function listarMaterias($conexao){
    $materias = array(); 
    $query = "SELECT * FROM tbMateria";
    $resultado = mysqli_query($conexao, $query);
    while($materia = mysqli_fetch_assoc($resultado)){
        array_push($materias, $materia);
    }

    return $materias;
}

function buscarMateria($conexao, $id){
    $query = "SELECT * FROM tbMateria WHERE id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alterarMateria ($conexao, $id, $nome, $nomeProfessor, $periodo, $cargaHoraria){
    $nome = mysqli_real_escape_string($conexao, $nome);
    $nomeProfessor = mysqli_real_escape_string($conexao, $nomeProfessor);

    $query = "update tbMateria set nome = '{$nome}', nomeProfessor = '{$nomeProfessor}',
    periodo = '{$periodo}', cargaHoraria = {$cargaHoraria} where id = {$id}";

    return mysqli_query($conexao, $query);
}
?>