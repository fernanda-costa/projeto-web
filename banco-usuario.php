<?php
    require_once("conexao.php");
    require_once("logica-usuario.php");

    function inserirUsuario($conexao, $nome, $email, $senha, $curso) {
        $senhaMd5 = md5($senha);
        $nome = mysqli_real_escape_string($conexao, $nome);
        $email = mysqli_real_escape_string($conexao, $email);
        $curso = mysqli_real_escape_string($conexao, $curso);

        $query = "INSERT INTO tbUsuario (nome, email, senha, curso)
        VALUES ('{$nome}', '{$email}', '{$senhaMd5}', '{$curso}')";

        return mysqli_query($conexao, $query);
    }

    function buscaUsuario ($conexao, $email, $senha) {
        $senhaMd5 = md5($senha);
        $email = mysqli_real_escape_string($conexao, $email);
        $query = "SELECT * FROM tbUsuario WHERE email = '{$email}' AND senha = '{$senhaMd5}'";
        $resultado = mysqli_query($conexao, $query);
        $usuario = mysqli_fetch_assoc($resultado);
        return $usuario;
    }

    function getUsuarioId ($conexao) {
        $email = usuarioLogado();
        $query = "SELECT id FROM tbUsuario WHERE email = '{$email}'";
        $resultado = mysqli_query($conexao, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>