<?php
require "config.inc.php";

echo "<div class='content'>";
echo "<a class='btn' href='?pg=consultas-cadastra-form'>Nova Consulta</a>";
echo "<h2>Consultas Marcadas</h2>";

$sql = "SELECT * FROM consultas";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {

    echo "<table>
            <tr>
                <th>ID</th>
                <th>Pet</th>
                <th>Tutor</th>
                <th>Data</th>
                <th>Hora</th>
                <th>Ações</th>
            </tr>";

    while ($dados = mysqli_fetch_array($resultado)) {

        echo "<tr>
                <td>{$dados['id']}</td>
                <td>{$dados['nome_pet']}</td>
                <td>{$dados['nome_tutor']}</td>
                <td>{$dados['data']}</td>
                <td>{$dados['hora']}</td>
                <td>
                    <a class='btn-edit' href='?pg=consultas-altera-form&id={$dados['id']}'>Alterar</a>
                    <a class='btn-delete' href='?pg=consultas-excluir&id={$dados['id']}'>Excluir</a>
                </td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "<p>Nenhuma consulta cadastrada.</p>";
}

echo "</div>";
