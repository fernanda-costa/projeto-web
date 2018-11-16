<?php 
    require_once("mostra-alerta.php");
    error_reporting(E_ALL ^ E_NOTICE);
    require_once("logica-usuario.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vida Academica</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/index.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<body>

<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="home.php">Vida Academica</a>
              
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="lista-materias.php">Materias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Faltas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="atividades.php">Atividades</a>
            </li>
        </ul>
        <?php
            if (usuarioIsLogado()){ ?>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item self-align-right">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>   
        <?php } ?>
       
       
    </div>
</nav>

    <div class="container">
        <div class="principal">

        <?php
            mostraAlerta("success");
            mostraAlerta("danger");
        ?>