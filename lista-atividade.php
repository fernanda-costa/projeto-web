<?php
    require("cabecalho.php");
    require("banco-atividade.php");

    $atividades = listarAtividades($conexao);?>

    <h3 class="titulo">Atividades</h3>

    <table>
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
            <form action="remove-atividade.php" method="post">
                <input type="hidden" name="id" value="<?=$atividade['id']?>">
                <button class="btn btn-seconday">Remover</a>
            </form>
        </td>
        <td>
            <form action="alterar-atividade.php" method="post">
                <input type="hidden" name="id" value="<?=$atividade['id']?>">
                <button class="btn btn-primary">Alterar</a>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>

   <a href="form-materia.php" class="btn-floating btn-large waves-effect waves-light red">
        <i class="material-icons">add</i>
    </a>

    <?php require("rodape.php");
?>