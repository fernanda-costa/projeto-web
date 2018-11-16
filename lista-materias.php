<?php
    require("cabecalho.php");
    require("banco-materia.php");

    $materias = listarMaterias($conexao);?>

    <h3 class="titulo">Matérias</h3>

    <table class="striped responsive-table">
        <thead>
            <td>Nome</td>
            <td>Nome do professor</td>
            <td>Periodo</td>
            <td>Carga Horaria</td>
            </thead>
    <?php foreach($materias as $materia): ?>
    <tr>
        <td><?=$materia['nome']?></td>
        <td><?=$materia['nomeProfessor']?></td>
        <td><?=$materia['periodo']?></td>
        <td><?=$materia['cargaHoraria'] . "hr"?></td>
        <td>
            <form action="form-materia-alterar.php" method="post">
                <input type="hidden" name="id" value="<?=$materia['id']?>">
                <button class="btn green lighten-2">Alterar</a>
            </form>
        </td>
        <td>
            <form action="remove-materia.php" method="post">
                <input type="hidden" name="id" value="<?=$materia['id']?>">
                <button class="btn red darken-2">Remover</a>
            </form>
        </td>
       </a></td>

    </tr>
    <?php endforeach; ?>
    </table>
    <a href="form-materia.php" class="btn-floating btn-large waves-effect waves-light red">
        <i class="material-icons">add</i>
    </a>

    <?php require("rodape.php");
?>