<?php
    require "config.inc.php";

    $id = $_REQUEST["id"];

    $sql = "SELECT * FROM pets WHERE id = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados["nome"];
            $especie = $dados["especie"];
            $raca = $dados["raca"];
            $tutor = $dados["tutor"];
        }

?>

<div class="form-box">
    <h2>Alteração de Pet</h2>
    <form action="?pg=pets-altera" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?=$nome?>" required><br>
        <label>Espécie:</label>
        <input type="text" name="especie" value="<?=$especie?>" required><br>
        <label>Raça:</label>
        <input type="text" name="raca" value="<?=$raca?>" required><br>
        <label>Tutor:</label>
        <input type="text" name="tutor" value="<?=$tutor?>" required><br><br>
        <input type="submit" value="Salvar Alterações">
    </form>
</div>

<?php
} else {
    echo "<h2>Nenhum pet encontrado</h2>";
}
?>
