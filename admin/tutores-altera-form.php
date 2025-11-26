<?php
    require "config.inc.php";

    $id = $_REQUEST["id"];

    $sql = "SELECT * FROM tutores WHERE id = '$id'";
    
    $resultado = mysqli_query($conexao, $sql);
    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $nome = $dados["nome"];
            $telefone = $dados["telefone"];
        }
?>

<div class="form-box">
<h2>Alteração de Tutor</h2>
    <form action="?pg=tutores-altera" method="post">
        <input type="hidden" name="id" value="<?=$id?>">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?=$nome?>" required><br>
        <label>Telefone:</label>
        <input type="text" name="telefone" value="<?=$telefone?>" required><br><br>
        <input type="submit" value="Salvar Alterações">
    </form>
</div>
<?php
} else {
        echo "<h2>Nenhum tutor encontrado</h2>";
    }
?>
