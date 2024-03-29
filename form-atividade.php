<?php
    require("cabecalho.php");
    include("banco-materia.php");
    $materias = listarMaterias($conexao);
?>

<h3>Adicionar Atividade</h3>

<form action="adicionar-atividade.php" method="post">

    <div class="row">
        <div class="input-field col s12">
            <input id="nome" type="text" class="validate" name="nome" autocomplete="off">
            <label for="nome">Titulo da atividade</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <input id="dataEntrega" type="text" class="datepicker" name="dataEntrega" autocomplete="off">
            <label for="dataEntrega">Data de Entrega</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s2">
            <input id="valor" type="text" class="validate" name="valor" autocomplete="off">
            <label for="valor">Valor</label>
        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="input-field col s12">
                <textarea id="descricao" class="materialize-textarea" name="descricao"></textarea>
                <label for="descricao">Descrição</label>
            </div>
        </div>
    </div>
    
    <div class="input-field col s8">
        <select name="materia_id">
            <option value="" disabled selected>Escolha a Materia</option>
            <?php foreach($materias as $materia): ?>
                <option value="<?=$materia['id']?>" <?=$selecao?>><?=$materia['nome']?></option>
            <?php endforeach ?>
        </select>
        <label for="materia_id">Materia</label>
    </div>

    <button type="submit" class="btn btn-primary">Adicionar Atividade</button>

</form>

<?php require("rodape.php"); ?>