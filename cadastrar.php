<?php
require_once "conexao.php";
$conexao = conectar();

$nome = $_POST['nome'];
$quant = $_POST['quantidade'];

$sql = "INSERT INTO produto (nome, quantidade) VALUES ('$nome', '$quant')";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}
?>