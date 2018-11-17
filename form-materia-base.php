<input type="hidden" name="id" value="<?=$materia['id']?>">

<div class="row">
    <div class="input-field col s12">
        <input id="nome" type="text" class="validate" name="nome" value="<?=$materia['nome']?>" autocomplete="off">
        <label for="nome">Nome da materia</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
        <input id="nomeProfessor" type="text" class="validate" name="nomeProfessor" value="<?=$materia['nomeProfessor']?>" autocomplete="off">
        <label for="nomeProfessor">Nome do Professor</label>
    </div>
</div>

<div class="row">
    <div class="input-field col s2">
        <input id="cargaHoraria" type="number" class="validate" name="cargaHoraria" value="<?=$materia['cargaHoraria']?>" autocomplete="off">
        <label for="cargaHoraria">Carga Horaria</label>
    </div>
</div>

<div id='js-radio'>
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
</div>

<div id='js-modal-dialog' class='lm-out-modal lm-d-none'>
    <div class='lm-inner-modal'>
        <input type='button' id='js-btn-close' class='lm-btn-close' value='x'>
        <div class='lm-msg-modal'>
            <h5>Erro</h5>
            <hr>
            <p>Há campos que não foram preenchidos corretamente.</p>
        </div>
    </div>
</div>