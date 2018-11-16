<?php
    require_once("cabecalho.php");
    require_once("banco-materia.php");

    $id = $_POST['id'];

    $materia = buscarMateria($conexao, $id);
    if($materia['periodo'] == "semestral"){
        $semestral = "checked='checked'";
    } else {
        $anual = "checked='checked'";
    }

?>

<h3>Alterar Materia</h3>

<form action="alterar-materia.php" method="post">

    <?php include("form-materia-base.php")?>
    
    <button type="submit" class="btn btn-primary">Alterar</button>
</form>

<?php
    require("rodape.php");
?>