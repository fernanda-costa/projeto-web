<?php 
    require_once("logica-usuario.php");

    logout();
    header("Location: index.php");
    $_SESSION["success"] = "Usuario deslogado com sucesso!";
die();