<?
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
        <div class="container">
        <div class="container-principal-produtos">
         <h4 class="page-header">CADASTRO DE PRODUTO</h4>
         <hr>
            <form action="cadastro.php" method="POST" enctype="multipart/form-data" name="upload">
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Nome do Produto:</label>
                  <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_nome" placeholder="Digite o nome do produto" required/>
                </div>
                  <div class="form-group col-md-3">
                    <label>Valor:</label>
                    <input class="form-control form-control-sm col-md-10 col-sm-10" type="text" name="c_valor" placeholder="Digite o valor do produto" required>
                  </div>      
                  <div class="form-group col-md-2">
                    <label>Tipo do Produto:</label>
                    <select  name="c_tipo" class="form-control form-control-sm col-md-10 col-sm-10" placeholder="Digite o tipo do produto" required>
                      <option value="Livro">Livro</option>
                      <option value="Eletrônico">Eletrônico</option>
                      <option value="Brinquedos">Brinquedos</option>   
                   </select>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-8">
                                <!--Realizando Upload de Imagem-->
                            <label class="control-label">Imagem</label>
                            <input class="form-control" type="file" required name="img">
                  </div> 
              </div>
              <div class="row">
                <div class="form-group col-md-8">
                  <label>Descrição do Produto:</label>
                  <textarea cols="4" rows="2" class="form-control col-md-8" name="c_desc" placeholder="Digite alguma descrição sobre o produto"></textarea> 
                </div>
              </div>
              <input type="submit" class="btn btn-primary" name="btn_enviar" value="Cadastrar">
            </form>
          </div>
       </div><!--Fechando container bootstrap-->
  <?php include("dep_query.php");?>     
  </body>
</html>

