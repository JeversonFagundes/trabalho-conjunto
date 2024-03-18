<?php
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * FROM produto";
$result = mysqli_query($conexao, $sql);
if ($result) {
    $nomes = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>

<body>
    <a href="form.php">Cadastrar</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>produto</th>
                <th>quant</th>
                <th colspan="2">Opções</th>
            </tr>
        </thead>
        <tbody>
            <?php
          foreach ($nomes as $nome) {

            echo '<tr>';
            
            echo '<td>' . $nome['id_produto'] . '</td>';
            echo '<td>' . $nome['nome'] . '</td>';
            echo "<td>" . $nome['quantidade'] . "</td>";
            echo '<td><a href="form-alterar.php?id_produto=' .
                $nome['id_produto'] . '">Alterar</td>'; 
            echo '<td><a href="excluir.php?id_produto=' .
                $nome['id_produto'] . '">Excluir</td>';
        }
        echo '</tr>';

            ?>
        </tbody>
    </table>
</body>

</html>