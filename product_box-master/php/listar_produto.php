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
        <meta name="description" content="Lista de produtos cadastrados">
        <!--LINK CSS-->
        <link rel="stylesheet" type="text/css" href="../css/style-css.css">
        <!--LINK CDN BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
      </head>
    <body>
        <div class="container-fluid">
        <?php include("menu.php");?> <!--INCLUINDO MENU-->
        </div>
        <div class="container">
          <div class="container-principal-produtos">
           <h4 class="page-header">DASHBOARD DIA/SEMANA</h4>
             <form class="form-inline" action="pesquisa.php" method="POST">
                <input type="text" class="form-control form-control-sm col-md-10 col-sm-10" name="c_pesquisa" placeholder="Pesquisar Produto" required="">
                 <input class="btn btn-sm" type="submit" name="btn_pesquisa">
             </form>
           <hr>
              <!--Controlador de tamanho e margem da tabela-->
               <div class="table-responsive">
                    <table class="table table-hover">
                            <thead>
                                <th>#</th>   
                                <th>Título</th>
                                <th>Ações</th>
                            </thead>
                          <tbody>                      
                            <?php
                             //Chamando banco de dados
                             include("conexao.php");
                             //selecionando o banco de dados
                             $bd = mysqli_select_db($conexao, "bd_resolv");
                            //fazendo a seleção da tabela tb_evento
                            $sql = "SELECT * FROM tb_produto ORDER BY cd_produto DESC";
                            //pegando os dados da tabela. Executando query
                            $resultado = mysqli_query($conexao, $sql);
                            while($linha = mysqli_fetch_array($resultado))
                            {
                               echo '<tr>';                  
                                   echo  '<td>'.$linha['cd_produto'].'</td>';
                                   echo  '<td>'.$linha['nm_produto'].'</td>';  
                                   //Ações                                      
                                   echo  "<td><button type='button' class='btn btn-sm btn-info'  data-toggle='modal' data-target='#myModal$linha[cd_produto]'> Mostrar</button>&nbsp<button type='button' class='btn btn-sm btn-warning'>Editar</button>&nbsp<button type='button' class='btn btn-sm btn-danger' data-toggle='modal' data-target='#apagar$linha[cd_produto]'>Deletar</button>&nbsp</td>"; 
                                                                       
                              echo "</tr>";
                              ?>
                                 <!--Inicio Modal.-->
                                  <div class="modal fade" id="myModal<?php echo $linha['cd_produto'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                           <center><h3 class="modal-title" id="myModalLabel"> Produto: <?php echo $linha['cd_produto'];?></h3></center>
                                          </div>
                                          <div class="modal-body">
<<<<<<< HEAD
                                              <h4><img src="uploads/<?php echo $linha['nm_imagem_produto'];?>" width="100%" height="20%"><br><br>
                                               <b>Nome:</b><?php echo $linha['nm_produto'];?><br><hr>
                                               <b>Descrição:</b><?php echo $linha['ds_produto'];?><br><hr>
                                               <b>Valor:</b><?php echo $linha['vl_produto'];?><br><hr>
                                               <b>Tipo de produto:</b><?php echo $linha['nm_produto'];?><br>
=======
                                              <h4><b>imagem:</b><img src="uploads/<?php echo $linha['nm_imagem_produto'];?>" width="100%" height="20%"><br><br>
                                           <b>Conteúdo:</b><?php echo $linha['ds_produto'];?><br><br>
>>>>>>> 495a4f70df8fa531e017854239dcf2708465a92d
                                          <!--<b>Data:</b><?php //echo $linha['dt_insercao'];?><br><br>-->             
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                                          </div>
                                        </div>
                                    </div>
                                  </div>
                                <!--fim modal-->    
                                      <?php
                                }
                              mysqli_close($conexao);
                              ?>
                            </tbody>
                      </table>
            </div>
          </div>
       </div><!--Fechando container bootstrap-->
  <?php include("dep_query.php");?>     
  </body>
</html>

