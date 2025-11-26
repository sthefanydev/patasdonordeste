<?php
    require_once "config.inc.php";

    $id = $_GET["id"];
    $sql = "DELETE FROM pets WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Pet excluído com sucesso.</h2>";
        echo "<a class='btn' href='?pg=pets-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao excluir pet.</h2>";
        echo "<a class='btn' href='?pg=pets-admin'>Voltar</a>";
    }
?>
