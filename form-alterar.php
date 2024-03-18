<?php
$id = $_GET['id_produto'];
require_once "conexao.php";
$conexao = conectar();
$sql = "SELECT * FROM produto WHERE id_produto = $id";
$result = mysqli_query($conexao, $sql);

if ($result) {
    $nome = mysqli_fetch_assoc($result);
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
    die();
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração</title>
</head>

<body>
    <form action="alterar.php" method="post">
        ID: <input type="number" name="id_produto" value="<?php echo  $nome['id_produto']; ?>"><br>
        nome: <input type="text" name="nome" value="<?php echo  $nome['nome']; ?>" ><br>
        numero: <input type="number" name="quantidade" value="<?php echo  $nome['quantidade']; ?>"><br>
        <input type="submit" value="Salvar"><br>
    </form>
</body>

</html>