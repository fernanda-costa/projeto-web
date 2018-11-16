<?php
    require("cabecalho.php");
    require("banco-atividade.php");

    $atividades = listarAtividades($conexao);?>

    <table class="table table-striped table-bordered">
        <thead>
            <td>Atividade</td>
            <td>Data de entrega</td>
            <td>Descricao</td>
        </thead>

    <?php foreach($atividades as $atividade): 
        $data = $atividade['dataEntrega'];
    ?>
    <tr>
        <td><?=$atividade['nome']?></td>
        <td><?= $data?></td>
        <td><?=substr($atividade['descricao'], 0, 50)?></td>
        <td>
            <form action="remove-materia.php" method="post">
                <input type="hidden" name="id" value="<?=$atividade['id']?>">
                <button class="btn btn-seconday">Remover</a>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>

    <a class="btn btn-primary" href="form-atividade.php">Adicionar Atividade</a>

    <?php require("rodape.php");
?>