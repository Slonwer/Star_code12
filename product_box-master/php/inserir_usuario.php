<?php
include("seguranca.php");
?>
<!doctype html>
<html lang="pt-br">
    <head>
      <title> PRODUCT BOX </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="Resolv, Grupo Resolv, Team">
        <meta name="author" content="Rodrigo Topan, Igor Ponso, João Diwan">
        <meta name="description" content="Página Inicial">
        <!--LINK CSS-->
        <link rel="stylesheet" type="text/css" href="../css/style-css.css">
        <!--LINK CDN BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      </head>
    <body>
        <div class="container-fluid">
        <?php include("menu.php");?> 
        </div>
        <div class="container"><!--ABRINDO CONTAINER BOOTSTRAP-->
        <div class="container-principal-produtos">
         <h4 class="page-header">CADASTRO DE USUÁRIO</h4><br>
         <form class="form-inline" action="pesquisa_usuario.php" method="POST">
          <input type="text" class="form-control form-control-sm col-md-10 col-sm-10" name="c_pesquisa" placeholder="Pesquisar Usuário" required="">
           <input class="btn btn-sm" type="submit" name="btn_pesquisa">
         </form>
         <hr>
               <form action="cadastro_usuario.php" method="POST" enctype="multipart/form-data" name="upload">
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Nome do Usuário:</label>
                  <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_nome" placeholder="Digite o nome do usuário" required/>
                </div>
                  <div class="form-group col-md-4">
                    <label>Email:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_email" placeholder="Digite o email do usuário" required>
                  </div>
                </div>
                <div class="row">      
                  <div class="form-group col-md-4">
                    <label>Senha do Usuário:</label>
                       <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_senha" placeholder="Digite a senha que o usuário irá utilizar" required>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Repita a senha:</label>
                       <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_senha_r" placeholder="Digite a senha que o usuário irá utilizar novamente" required>
                  </div>
                </div>
                  <hr>
              <input type="submit" class="btn btn-primary" name="btn_enviar" value="Cadastrar">
            </form>

          </div>
        </div>
       </div><!--Fechando container bootstrap-->
  <?php include("dep_query.php");?>     
  </body>
</html>

