<!--Criando segurança para não deixar que usuários entrem no sistema sem fazer login-->
<?php
include("seguranca.php");

//entrada de formulário
$nm_produto = $_POST['c_nome'];
$valor_produto = $_POST['c_valor'];
$tipo_produto =$_POST['c_tipo']; 
$ds_produto = $_POST['c_desc'];

//parametros para imagem
$pasta='uploads';
$permitido=array('image/jpg','image/jpeg','image/pjpeg'); //extensões permitidas
$img=$_FILES['img'];
$tmp=$img['tmp_name'];
$name=$img['name']; //nome da imagem;
$type=$img['type']; //tipo nativo do arquivo;
    include("conexao.php");
    mysqli_select_db($conexao,"bd_resolv");
    require('funcao.php');
    if(!empty($name) && in_array($type, $permitido)){
        $nome='img-'.'jpg';
        upload($tmp,$nome,500,$pasta); //upload + conversão da img com 500px;

        $sql = "INSERT INTO tb_produto VALUES (DEFAULT, '$nm_produto', '$ds_produto','$nome','$valor_produto','$tipo_produto')";

        $salvar = mysqli_query($conexao,$sql);
        header("Location:listar_produto.php");
    }else{
        echo "Extensão de arquivo não suportada";
    }
    
mysqli_close($conexao);
?>