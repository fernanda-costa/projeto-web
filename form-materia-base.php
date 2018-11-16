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
    <input type="number" class="form-control" name="cargaHoraria" value="<?=$materia['cargaHoraria']?>">
</div>

 <p>
      <label>
        <input name="periodo" type="radio" value="semestral" <?=$semestral?>/>
        <span>Semestral</span>
      </label>
    </p>

<p>
      <label>
        <input name="periodo" type="radio" value="anual" <?=$anual?>/>
        <span>Anual</span>
      </label>
    </p>