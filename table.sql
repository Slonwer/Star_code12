
CREATE DATABASE produtos;
USE produtos;

CREATE TABLE produtos (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  position VARCHAR(30) NOT NULL,
  office VARCHAR(30) NOT NULL,
  age INT(3) NOT NULL,
  start_date DATE NOT NULL,
  salary VARCHAR(15) NOT NULL
);

INSERT INTO produtos (name, position, office, age, start_date, salary)
VALUES ('Produto', '4401', 'SP', 0, '0000-00-00', '');

INSERT INTO produtos (name, position, office, age, start_date, salary)
VALUES ('Mercadoria', '1800-000', 'PR', 0, '0000-00-00', '');

SELECT * FROM produtos WHERE office='Produto';

CREATE TABLE cliente (
  cli_codigo INTEGER,
  cli_nome VARCHAR(40),
  cli_cidade INTEGER
);

INSERT INTO cliente (cli_codigo, cli_nome, cli_cidade)
VALUES (1, 'user', 1);

INSERT INTO cliente (cli_codigo, cli_nome, cli_cidade)
VALUES (2, 'sycon', 3);

SELECT cliente.*, estado.*
FROM cliente, estado
WHERE cliente.cli_cidade = estado.est_codigo;

CREATE TABLE funcionario (
 fun_estagio  VARCHAR (40),
 fun_escrevente VARCHAR (40),
 fun_contabilidade VARCHAR (40)
);

INSERT INTO funcionario (fun_contabilidade, fun_escrevente, fun_estagio)
VALUES (1, 'user', 1);

