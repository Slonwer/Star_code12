<?php

$email=$_POST['c_email'];
$senha=$_POST['c_senha'];
 //$login=  mysql_real_escape_string($login);
 //$senha= mysql_real_escape_string($senha);

include("conexao.php");
 
 mysqli_select_db($conexao,"bd_resolv");

$sql= mysqli_query($conexao, "SELECT * FROM tb_usuario where nm_email='$email' and nm_senha='$senha'") or die(mysqli_error());
    $cont = mysqli_num_rows($sql);
        if($cont>0){
       	session_start();
          $_SESSION['email_usuario']=$email;
          $_SESSION['senha_usuario']=$senha;
          header("Location:listar_produto.php"); 
        }
        else{
            header("Location:index.html");
        }
        
        mysqli_close($conexao);
?>


     