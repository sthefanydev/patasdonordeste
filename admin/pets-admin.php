<?php
require "config.inc.php";

echo "<div class='content'>";
echo "<a class='btn' href='?pg=pets-cadastra-form'>Cadastrar Pet</a>";
echo "<h2>Lista de Pets</h2>";

$sql = "SELECT * FROM pets";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<table class='table-admin'>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Espécie</th>
                <th>Raça</th>
                <th>Tutor</th>
                <th>Ações</th>
            </tr>";

    while($dados = mysqli_fetch_array($resultado)) {
        echo "<tr>
                <td>{$dados['id']}</td>
                <td>{$dados['nome']}</td>
                <td>{$dados['especie']}</td>
                <td>{$dados['raca']}</td>
                <td>{$dados['tutor']}</td>
                <td>
                    <a class='btn-edit' href='?pg=pets-altera-form&id={$dados['id']}'>Alterar</a>
                    <a class='btn-delete' href='?pg=pets-excluir&id={$dados['id']}'>Excluir</a>
                </td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum pet cadastrado.</p>";
}

echo "</div>";
?>
