CREATE DATABASE db_store;

USE db_store;

CREATE TABLE tb_category(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

CREATE TABLE tb_product (
    id INT(11) NOT NULL  PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    valor FLOAT(5,2) NOT NULL,
    category_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tb_category(
    name, description)
    VALUES('informatica', 'Produtos de informatica e acessorios para computador'),
    ('Escritorio', 'Canetas, cadernos folhas e etc'),
    ('Eletronicos', 'TV´s, Som portatil, Caixas de som, etc');

    INSERT INTO tb_product(name,description,photo,valor,category_id,quantity,created_at)
    VALUES('Teclado Mecanico Gameer','Teclado Mecanico Gamer com LED de 8 cores','https://m.media-amazon.com/images/I/718-DlUkzWL._AC_SL1500_.jpg',255.55,'1','15','2022-06-19 10:35:22'),
    ('Mouse sem fio Logitech','Mouse sem fio Logitech óptico','https://a-static.mlcdn.com.br/1500x1500/mouse-sem-fio-logitech-optico-1000dpi-m185-3-botoes-cinza/magazineluiza/224586300/76902f2ef91bdc659c1c325f2ae011ad.jpg',99.99,'1','15','2022-06-19 10:33:22'),
    ('Computador PC Completo I5, 8GB','Computador Desktop Dell Vostro 3681-M20M 10ª Geração Intel Core i5 8GB 1TB Windows 10 com Monitor 21','https://imgs.casasbahia.com.br/1506959437/1xg.jpg?imwidth=65',300.00,'1','10','2022-06-19 12:12:12'),
    ('Mesa de escritório 1,20','MESA PARA ESCRITÓRIO 1,60x60 LINHA ONE (COLORS & WOODY)','http://cdn1.appsisecommerce.com.br/clientes/cliente5547/produtos/23047/L5804.jpg',409.99,'2','9','2022-06-19 12:12;22'),
    ('Caixa Som Bluetooth Amp 250w','Caixa de Som Amplificada Bluetooth Radio FM Bivolt 250W REF AMVOX-503851','https://img.lojadomecanico.com.br/256/46/448/163489/1613133152866.JPG',708.00,'3','5','2022-06-19 12:12:25');