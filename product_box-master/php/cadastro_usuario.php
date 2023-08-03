<?php
include("seguranca.php");
//entrada de formulário
$nm_usuario = $_POST['c_nome'];
$nm_email = $_POST['c_email'];
$nm_senha =$_POST['c_senha']; 
$nm_senha_r=$_POST['c_senha_r']; 

if($nm_senha === $nm_senha_r){
        include("conexao.php");
        mysqli_select_db($conexao,"bd_resolv");
                $sql = "INSERT INTO tb_usuario VALUES (DEFAULT, '$nm_usuario', '$nm_email','$nm_senha')";
                $salvar = mysqli_query($conexao,$sql);
                header("Location:listar_usuario.php");
    mysqli_close($conexao);
}
else{
    echo "As senhas informadas não são idênticas";
}
?>