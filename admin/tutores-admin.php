<?php
require "config.inc.php";

echo "<div class='content'>";
echo "<a class='btn' href='?pg=tutores-cadastra-form'>Cadastrar Tutor</a>";
echo "<h2>Lista de Tutores</h2>";

$sql = "SELECT * FROM tutores";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {

    echo "<table>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>";

    while ($dados = mysqli_fetch_array($resultado)) {

        echo "<tr>
                <td>{$dados['id']}</td>
                <td>{$dados['nome']}</td>
                <td>{$dados['telefone']}</td>
                <td>{$dados['email']}</td>
                <td>
                    <a class='btn-edit' href='?pg=tutores-altera-form&id={$dados['id']}'>Alterar</a>
                    <a class='btn-delete' href='?pg=tutores-excluir&id={$dados['id']}'>Excluir</a>
                </td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhum tutor cadastrado.</p>";
}

echo "</div>";
?>