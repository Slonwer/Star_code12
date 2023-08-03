<?php
//ob start tira os espaços em branco
ob_start();
session_start();
//VERIFICACAO PARA VER SE O USUARIO ESTÁ LOGADO
if(($_SESSION['email_usuario']== "") || ($_SESSION['senha_usuario']== "")){
    header("Location:index.html");
}
?>