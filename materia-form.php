<?php
    require("cabecalho.php");
?>

<h3>Adicionar Materia</h3>

<form action="adicionar-materia.php" method="post">
    <div class="form-group">
        <label for="nome">Nome da materia</label>
        <input type="text" class="form-control" name="nome">
    </div>

    <div class="form-group">
        <label for="nomeProfessor">Nome do Professor</label>
        <input type="text" class="form-control" name="nomeProfessor">
    </div>

    <div class="form-group  col-md-2">
        <label for="cargaHoraria">CargaHoraria</label>
        <input type="number" class="form-control" name="cargaHoraria">
    </div>

    <div class="custom-control custom-radio">
        <input type="radio" id="semestral" name="periodo" class="custom-control-input" value="semestral">
        <label class="custom-control-label" for="semestral">semestral</label>
    </div>

    <div class="custom-control custom-radio">
        <input type="radio" id="anual" name="periodo" class="custom-control-input" value="anual">
        <label class="custom-control-label" for="anual">anual</label>
    </div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php
    require("rodape.php");
?>