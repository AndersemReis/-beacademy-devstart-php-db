CREATE db_escola;

CREATE TABLE tb_professor(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE tb_aluno(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(100) NOT NULL,
    matricula VARCHAR(10) NOT NULL
);

INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Alessandro', 'alessandro@gmail.com', '12345612312');

INSERT INTO tb_professor (nome, email, cpf)
VALUES ('Bruno', 'bruno@gmail.com', '12345612312');

SELECT * FROM tb_professor;

DELETE FROM tb_professor WHERE id='2';