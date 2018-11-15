<?php
    require_once("conexao.php");

    function inserirUsuario($conexao, $nome, $email, $senha, $curso) {
        $senhaMd5 = md5($senha);
        $nome = mysqli_real_escape_string($conexao, $nome);
        $email = mysqli_real_escape_string($conexao, $email);
        $curso = mysqli_real_escape_string($conexao, $curso);

        $query = "INSERT INTO dbUsuario (nome, email, senha, curso)
        VALUES ('{$nome}', '{$email}', '{$senhaMd5}', '{$curso}')";

        return mysqli_query($conexao, $query);
    }
?>