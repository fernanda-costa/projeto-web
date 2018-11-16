<?php
    require("cabecalho.php");
    include("banco-materia.php");
    $materias = listarMaterias($conexao);

?>

<h3>Adicionar Atividade</h3>

<form action="adicionar-atividade.php" method="post">
    <div class="form-group">
        <label for="nome">Nome da atividade</label>
        <input type="text" class="form-control" name="nome">
    </div>

    <div class="form-group">
        <label for="dataEntrega">Data de entrega</label>
        <input type="text" class="form-control" name="dataEntrega">
    </div>

    <div class="form-group  col-md-2">
        <label for="valor">Valor</label>
        <input type="number" class="form-control" name="valor">
    </div>

     <div class="form-group  col-md-2">
     <textarea class="form-control" name="descricao"></textarea><br>
    </div>

    <div class="form-group">
        <label for="materia_id">Materia</label>
        <select name="materia_id">
            <?php foreach($materias as $materia): ?>
                <option value="<?=$materia['id']?>" <?=$selecao?>><?=$materia['nome']?></option>
            <?php endforeach ?>
        </select> 
    </div>

    <button type="submit" class="btn btn-primary">Adicionar Atividade</button>
</form>

<?php
    require("rodape.php");
?>