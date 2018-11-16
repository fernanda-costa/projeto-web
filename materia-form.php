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
    <label for="nome-professor">Nome do Professor</label>
    <input type="text" class="form-control" name="nomeProfessor">
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="periodo" value="semestral">
  <label class="form-check-label" for="periodo">Semestral</label>
</div>
<div class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="periodo" value="anul">
  <label class="form-check-label" for="periodo">Anual</label>
</div><br>

<div class="form-group col-md-2">
      <label for="carga-horaria">Carga Horaria</label>
      <input type="number" class="form-control" name="cargaHoraria">
    </div>

  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>

<?php
    require("rodape.php");
?>