# product_box
Sistema de cadastro e gerenciamento de produtos - PHP

Esse sistema é costítuído pela seguinte estrutura
  index.html: página inicial que apresenta ao usuário opção de realizar login no painel adnistrativo
  listar_produto.php: página que apresenta listagem de todos os produtos cadastrados e opção para vizualizar maiores informações sobre este.
  cadastro.php: página que apresenta formulário de cadastro de novos produtos ao usuário.
  
  
FUNÇÃO PHP para upload = função
  
 
 
 OBSERVAÇÃO
  Para utilização deste, vale lembrar que devemos fazer o download do script do banco de dados e executá-lo.
  
DROP TABLE IF EXISTS tb_usuario;
CREATE TABLE tb_usuario(
  cd_usuario int(11) not null AUTO_INCREMENT,
  nm_usuario varchar(50) not null,
  nm_email varchar(50) not null,
  nm_senha varchar(18) not null,
  CONSTRAINT pk_usuario PRIMARY KEY(cd_usuario),
  CONSTRAINT uk_email UNIQUE (nm_email)
);


DROP TABLE IF EXISTS tb_produto;
CREATE TABLE tb_produto(
  cd_produto int(11) not null AUTO_INCREMENT,
  nm_produto varchar(50) not null,
  ds_produto varchar(300),
  nm_imagem_produto varchar(50) not null,
  vl_produto decimal(10,2) not null,
  nm_tipo_produto varchar(25) not null,
  CONSTRAINT pk_produto PRIMARY KEY (cd_produto)
);

select * from tb_produto;

INSERT INTO TB_USUARIO VALUES(DEFAULT,'Rodrigo Topan','rodrigo.topan@hotmail.com','admin');
INSERT INTO TB_PRODUTO VALUES(DEFAULT,'A Menina que Roubava
  
  
  
  
