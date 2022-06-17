CREATE TABLE tb_professor(
    id INT(11),
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(100) NOT NULL
);

CREATE TABLE tb_aluno(
    id INT(11),
    nome VARCHAR(100) NOT NULL,
    cpf CHAR(11) UNIQUE NOT NULL,
    email VARCHAR(100) NOT NULL,
    matricula VARCHAR(10) NOT NULL
);