<?php
    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $pet = $_POST["pet"];
        $data = $_POST["data"];
        $hora = $_POST["hora"];
        $servico = $_POST["servico"];

    $sql = "INSERT INTO consultas (pet, data, hora, servico)
                VALUES ('$pet', '$data', '$hora', '$servico')";
                
    if(mysqli_query($conexao, $sql)){
        echo "<h2>Consulta agendada com sucesso.</h2>";
        echo "<a class='btn' href='?pg=consultas-admin'>Voltar</a>";
    } else {
        echo "<h2>Erro ao agendar consulta.</h2>";
        }
    } else {
        echo "<h2>Envio inválido.</h2>";
    }
?>
