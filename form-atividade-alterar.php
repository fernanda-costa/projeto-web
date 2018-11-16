<?php
    require("cabecalho.php");
    include("banco-atividade.php");
    include("banco-materia.php");

    $id = $_POST['id'];

    $materias = listarMaterias($conexao);
    $atividade = buscarAtividade($conexao, $id);
?>

<h3>Alterar Atividade</h3>

<form action="alterar-atividade.php" method="post">

    <input type="hidden" name="id" value="<?=$atividade['id']?>">

    <div class="row">
        <div class="input-field col s12">
            <input id="nome" type="text" class="validate" name="nome" autocomplete="off" value="<?=$atividade['nome']?>">
            <label for="nome">Titulo da atividade</label>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <input id="dataEntrega" type="text" class="datepicker" name="dataEntrega" autocomplete="off" value="<?=$atividade['dataEntrega']?>">
            <label for="dataEntrega">Data de Entrega</label>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s2">
            <input id="valor" type="text" class="validate" name="valor" autocomplete="off" value="<?=$atividade['valor']?>">
            <label for="valor">Valor</label>
        </div>
    </div>
    <div class="row">
        <div class="row">
            <div class="input-field col s12">
                <textarea id="descricao" class="materialize-textarea" name="descricao"><?=$atividade['descricao']?></textarea>
                <label for="descricao">Descrição</label>
            </div>
        </div>
    </div>
    
    <div class="input-field col s8">
        <select name="materia_id">
            <option value="" disabled selected>Escolha a Materia</option>
            <?php foreach($materias as $materia): 
                $materiaSelecionada = $atividade['materia_id'] == $materia['id'];
                $selecao = $materiaSelecionada ? "selected='selected'" : ""; ?>   
                <option value="<?=$materia['id']?>" <?=$selecao?>><?=$materia['nome']?></option>
            <?php endforeach ?>
        </select>
        <label for="materia_id">Materia</label>
    </div>

    <button type="submit" class="btn btn-primary">Alterar Atividade</button>

</form>

<?php require("rodape.php"); ?>