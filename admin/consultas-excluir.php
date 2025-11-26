<?php
    require_once "config.inc.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM consultas WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Consulta excluída com sucesso.</h2>";
        echo "<a class='btn' href='?pg=consultas-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao excluir consulta.</h2>";
        echo "<a class='btn' href='?pg=consultas-admin'>Voltar</a>";
    }
?>
