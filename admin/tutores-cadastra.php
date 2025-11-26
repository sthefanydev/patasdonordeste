<?php
    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];

    $sql = "INSERT INTO tutores (nome, telefone)
            VALUES ('$nome', '$telefone')";

    if(mysqli_query($conexao, $sql)){
        echo "<h2>Tutor cadastrado com sucesso.</h2>";
        echo "<a href='?pg=tutores-admin'>Voltar</a>";
    }else{
        echo "<h2>Erro ao cadastrar tutor.</h2>";
        }
    }else{
        echo "<h2>Envio inválido.</h2>";
    }
?>
