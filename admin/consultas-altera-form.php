<?php
    require "config.inc.php";

    $id = $_REQUEST["id"];
    $sql = "SELECT * FROM consultas WHERE id = '$id'";
    
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        $dados = mysqli_fetch_array($resultado);
        $pet = $dados['pet'];
        $data = $dados['data'];
        $hora = $dados['hora'];
        $veterinario = $dados['veterinario'];
        $servico = $dados['servico'];
?>

<div class="form-box">
<h2>Editar Consulta</h2>
    <form action="?pg=consultas-altera" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <label>Pet:</label>
        <input type="text" name="pet" value="<?=$pet?>" required><br>
        <label>Data:</label>
        <input type="date" name="data" value="<?=$data?>" required><br>
        <label>Horário:</label>
        <input type="time" name="hora" value="<?=$hora?>" required><br>
        <label>Serviço:</label>
        <input type="text" name="servico" value="<?=$servico?>" required><br><br>
        <input type="submit" value="Salvar Alterações">
    </form>
</div>
<?php
} else {
    echo "<h3>Consulta não encontrada.</h3>";
}
?>
