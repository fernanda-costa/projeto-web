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
    <link rel="stylesheet" type="text/css" href="css/index.css"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<body>

<nav>
    <div class="nav-wrapper cyan lighten-1">
      <a href="home.php" class="brand-logo">Vida Academica</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="lista-materias.php">Materias</a></li>
        <li><a href="lista-atividade.php">Atividades</a></li>
        <?php if (usuarioIsLogado()){ ?>
            <li class="nav-item self-align-right">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        <?php } ?>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
  <li><a href="lista-materias.php">Materias</a></li>
  <li><a href="lista-atividade.php">Atividades</a></li>
  <?php if (usuarioIsLogado()){ ?>
            <li class="nav-item self-align-right">
                <a class="nav-link" href="logout.php">Logout</a>
            </li>
        <?php } ?>    
  </ul>
        
    <div class="container">
        <div class="principal">

        <?php
            mostraAlerta("success");
            mostraAlerta("danger");
        ?>