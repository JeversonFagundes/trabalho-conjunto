<?php
require_once "conexao.php";
$conexao = conectar();

$id = $_GET['id_produto'];

$sql = "DELETE FROM produto WHERE id_produto=$id";
$result = mysqli_query($conexao, $sql);
if ($result) {
    header("Location: index.php");
} else {
    echo mysqli_errno($conexao) . ": " . mysqli_error($conexao);
}