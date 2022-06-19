CREATE DATABASE db_store;

USE db_store;

CREATE TABLE tb_category(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

INSERT INTO tb_category(
    name, description)
    VALUES('informatica', 'Produtos de informatica e acessorios para computador'),
    ('Escritorio', 'Canetas, cadernos folhas e etc'),
    ('Eletronicos', 'TV´s, Som portatil, Caixas de som, etc');