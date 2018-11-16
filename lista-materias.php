<?php
    require("cabecalho.php");
    require("banco-materia.php");

    $materias = listarMaterias($conexao);?>

    <table class="table table-striped table-bordered">
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
            <form action="materia-altera-form.php" method="post">
                <input type="hidden" name="id" value="<?=$materia['id']?>">
                <button class="btn btn-primary">Alterar</a>
            </form>
        </td>
        <td>
            <form action="remove-produto.php" method="post">
                <input type="hidden" name="id" value="<?=$produto['id']?>">
                <button class="btn btn-seconday">Remover</a>
            </form>
        </td>
       </a></td>

    </tr>
    <?php endforeach; ?>
    </table>

    <a class="btn btn-primary" href="materia-form.php">Adicionar Materia</a>



    
    <?php require("rodape.php");
?>