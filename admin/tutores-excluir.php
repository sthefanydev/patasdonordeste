<?php
    require_once "config.inc.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM tutores WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Tutor excluído com sucesso.</h2>";
        echo "<a href='?pg=tutores-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao excluir tutor.</h2>";
        echo "<a href='?pg=tutores-admin'>Voltar</a>";
    }
?>
