<?php
    require_once("cabecalho.php");
    $materia = array("nome" => "", "nomeProfessor" => "", "cargaHoraria" => "");
?>

<h3>Adicionar Materia</h3>

<form id='formSubmit'>
  
    <?php include("form-materia-base.php")?>
    
    <input type='button' id='js-btn-mat' class="btn btn-primary" value='Cadastrar'>
</form>

<?php
    require("rodape.php");
?>