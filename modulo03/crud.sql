USE db_escola;

INSERT INTO tb_professor (nome, email, cpf)
VALUES ('chiquim', 'chiquim@gmail.com', '12312312312');

INSERT INTO tb_professor (nome, email, cpf)
VALUES ('sezim', 'zezim@gmail.com', '12312312313'),
('zezim teste', 'zezimteste@gmail.com', '12312312314');

--exluir itens da tabela
DELETE FROM tb_professor WHERE id='1';
DELETE FROM tb_professor;

--editar dados na tabela
UPDATE tb_professor SET nome='zezim novo' WHERE cpf='12312312313';

--editar dados de todos os registro
UPDATE tb_professor SET nome='Francisco';

--selecionar dados
SELECT * FROM tb_professor;

--selecionar dados especificos por id
SELECT * FROM tb_professor WHERE id='5';

--selecionar alguns dados de todos os professores
SELECT nome,cpf FROM tb_professor;