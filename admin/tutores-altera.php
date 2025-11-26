<?php
    require_once "config.inc.php";

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];

    $sql = "UPDATE tutores SET 
            nome = '$nome',
            telefone = '$telefone'
            WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Tutor alterado com sucesso.</h2>";
        echo "<a class='btn' href='?pg=tutores-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao alterar tutor.</h2>";
    }
?>
