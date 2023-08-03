<?php
$hostname = "localhost";
$user = "root";
$password = "root";
$database = "bd_resolv";
$conexao = mysqli_connect($hostname,$user,$password,$database);

if (!$conexao){
    print "Falha na Conexão com o Banco de Dados";
}
