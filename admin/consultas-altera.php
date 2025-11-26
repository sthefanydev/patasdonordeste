<?php
    require_once "config.inc.php";

    $id = $_POST['id'];
    $pet = $_POST['pet'];
    $data = $_POST['data'];
    $hora = $_POST['hora'];
    $servico = $_POST['servico'];

    $sql = "UPDATE consultas SET
        pet = '$pet',
        data = '$data',
        hora = '$hora',
        servico = '$servico'
        WHERE id = '$id'";
if (mysqli_query($conexao, $sql)) {
    echo "<h2>Consulta atualizada com sucesso.</h2>";
    echo "<a class='btn' href='?pg=consultas-admin'>Voltar</a>";
} else {
    echo "<h2>Erro ao atualizar consulta.</h2>";
}
