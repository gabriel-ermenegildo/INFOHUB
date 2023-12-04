CREATE TABLE clientes (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    celular VARCHAR(11) NOT NULL,
    email VARCHAR(255),
    cidade VARCHAR(255),
    cpf VARCHAR(11) NOT NULL
);
CREATE TABLE maquinas (
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    modelo VARCHAR(255) NOT NULL,
    valor DECIMAL(10,2) NOT NULL,
    numero_serie VARCHAR(255),
    alugada INT NOT NULL
);
CREATE TABLE tipo_de_servico (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome VARCHAR(255) NOT NULL
);
CREATE TABLE servicos (
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	id_clientes INT NOT NULL,
	id_maquinas INT NOT NULL,
	id_tipo_de_servico INT NOT NULL,
	orcamento DECIMAL(10,2) NOT NULL,
	data_de_devolucao DATE,
	FOREIGN KEY (id_clientes) references clientes(id),
	FOREIGN KEY (id_tipo_de_servico) references tipo_de_servico(id),
	FOREIGN KEY (id_maquinas) references maquinas(id)
);
INSERT INTO tipo_de_servico (nome) VALUES
('Aluguel'),
('Conserto');

INSERT INTO clientes (nome,celular,email,cidade,cpf) VALUES
('Alfredo','14999999999','alfredin157@gmail.com','Marília','44444444444'),
('Constantino','14777777777','constantinorebeichado@gmail.com','Pindamonhangaba','12333322111'),
('Constancia','14770777777','constanciareb@gmail.com','Paulicéia','19333322111');

INSERT INTO maquinas (modelo,valor,numero_serie,alugada) VALUES
('Alfred','1290.00','1239123719','1'),
('Constance','1477.50','1231203923471','0'),
('Claire','1477.00','213196809163','1');

INSERT INTO servicos  (id_clientes,id_maquinas,id_tipo_de_servico, orcamento, data_de_devolucao) VALUES
('1','1','1','2000.00','2023-12-01');

ALTER TABLE servicos add column `data` DATE AFTER orcamento;