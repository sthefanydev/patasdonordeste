<?php
    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $especie = $_POST['especie'];
    $raca = $_POST['raca'];
    $tutor = $_POST['tutor'];

    $sql = "UPDATE pets SET 
            nome = '$nome',
            especie = '$especie',
            raca = '$raca',
            tutor = '$tutor'
            WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Pet alterado com sucesso.</h2>";
        echo "<a class='btn' href='?pg=pets-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao alterar pet.</h2>";
    }
