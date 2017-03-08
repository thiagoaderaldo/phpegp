CREATE DATABASE db_agenda;

CREATE TABLE tb_usuario(
	id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    senha VARCHAR(255),
    criado_em VARCHAR(20),
    ultimo_acesso VARCHAR(20)
);

CREATE TABLE tb_contato(
	id_contato INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT,
    nome VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(100),
    criado_em VARCHAR(20)
);
