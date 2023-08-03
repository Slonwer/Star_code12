<?php
include("seguranca.php");
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$pass = $_POST['senha'];

$sql = "INSERT INTO tb_usuario (nm_usuario, nm_email, nm_senha) VALUES ('$nome', '$email', '$senha')";
$salvar = mysqli_query($conexao,$sql);

mysqli_close($conexao);

?>