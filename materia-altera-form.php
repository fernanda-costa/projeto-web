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

    <input type="hidden" name="id" value="<?=$materia['id']?>">

    <div class="form-group">
        <label for="nome">Nome da materia</label>
        <input type="text" class="form-control" name="nome" value="<?=$materia['nome']?>">
    </div>

    <div class="form-group">
        <label for="nome-professor">Nome do Professor</label>
        <input type="text" class="form-control" name="nomeProfessor" value="<?=$materia['nomeProfessor']?>">
    </div>

    <div class="form-group  col-md-2">
        <label for="cargaHoraria">CargaHoraria</label>
        <input type="number" class="form-control" name="cargaHoraria">
    </div>

    <div class="custom-control custom-radio">
        <input type="radio" id="semestral" name="periodo" class="custom-control-input" value="semestral" <?=$semestral?>>
        <label class="custom-control-label" for="semestral">semestral</label>
    </div>

    <div class="custom-control custom-radio">
        <input type="radio" id="anual" name="periodo" class="custom-control-input" value="anual" <?=$anual?>>
        <label class="custom-control-label" for="anual">anual</label>
    </div>
    
    <button type="submit" class="btn btn-primary">Alterar</button>
</form>

<?php
    require("rodape.php");
?>