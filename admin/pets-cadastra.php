<?php
    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $especie = $_POST["especie"];
        $raca = $_POST["raca"];
        $tutor = $_POST["tutor"];
    $sql = "INSERT INTO pets (nome, especie, raca, tutor)
            VALUES ('$nome', '$especie', '$raca', '$tutor')";

    $resultado = mysqli_query($conexao, $sql);

        if($resultado){
            echo "<h2>Pet cadastrado com sucesso.</h2>";
            echo "<a class='btn' href='?pg=pets-admin'>Voltar</a>";
        } else {
            echo "<h2>Erro ao cadastrar.</h2>";
        }
    } else {
        echo "<h2>Envio inválido.</h2>";
    }