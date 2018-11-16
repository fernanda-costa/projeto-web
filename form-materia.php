<?php
    require_once("cabecalho.php");
    $materia = array("nome" => "", "nomeProfessor" => "", "cargaHoraria" => "");
?>

<h3>Adicionar Materia</h3>

<form action="adicionar-materia.php" method="post">
  
    <?php include("form-materia-base.php")?>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php
    require("rodape.php");
?>