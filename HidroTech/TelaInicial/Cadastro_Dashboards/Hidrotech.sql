-- Active: 1795009438430@@127.0.0.1@3306@sistema_caixa_agua
CREATE DATABASE Sistema_caixa_agua;
USE Sistema_caixa_agua;

CREATE TABLE usuario(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL,
    senha INT NOT NULL,
    acesso VARCHAR(255) NOT NULL
);
SELECT * FROM usuario;

CREATE TABLE sensor(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    tipo VARCHAR(255) NOT NULL
);
SELECT * FROM sensor;

CREATE TABLE medicao(
	id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    percentual FLOAT NOT NULL,
    data_hora DATETIME NOT NULL,
    fk_id_sensor INT NOT NULL,
    FOREIGN KEY (fk_id_sensor) REFERENCES sensor(id)
);
SELECT * FROM medicao;

-- Instauração de usuarios 
INSERT INTO usuario (id, nome, email, senha, acesso) VALUES
(1, 'João Pedro Silva', 'joao@gmail.com', 12344, 'mor'),
(2, 'Maria Eduarda Santos ', 'maria@gmail.com', 45674, 'mor'),
(3, 'Gabriel Oliveira', 'gabriel@gmail.com ', 78904, 'mor'),
(4, 'Ana Clara Souza', 'ana@gmail.com', 11224, 'mor'),
(5, 'Pedro Henrique Costa', 'pedro@gmail.com ', 33454, 'mor'),
(6, 'Carlos Eduardo Lima', 'carlos@gmail.com', 12345, 'man'),
(7, 'Rafael Mendes', 'rafael@gmail.com', 45675, 'man'),
(8, 'Matheus Rodrigues', 'matheus@gmail.com', 11225, 'man'),
(9, 'Felipe Almeida', 'felipe@gmail.com', 33455, 'man'),
(10, 'Lucas Santos', 'lucas@gmail.com', 55555, 'adm');

-- Cadastro sensores
INSERT INTO sensor (id,tipo) VALUES
(1, 'Ultrassônico'),
(2, 'Ultrassônico'),
(3, 'Ultrassônico');

SELECT * FROM sensor;

-- Cadastro medições
INSERT INTO medicao (id, percentual, data_hora, fk_id_sensor) VALUES
(1, 95.0, '2026-11-10 08:00:00', 1),
(2, 88.5, '2026-11-10 09:00:00', 1),
(3, 75.0, '2026-11-10 10:00:00', 1),
(4, 62.5, '2026-11-10 11:00:00', 1),
(5, 50.0, '2026-11-10 12:00:00', 2),
(6, 38.0, '2026-11-10 13:00:00', 2),
(7, 25.0, '2026-11-10 14:00:00', 2),
(8, 18.0, '2026-11-10 15:00:00', 3),
(9, 12.5, '2026-11-10 16:00:00', 3);

SELECT * FROM medicao;

-- Dados relacionados 
SELECT 
	usuario.nome,
    usuario.email,
	medicao.id AS medicao_id,
    medicao.percentual,
    medicao.data_hora,
    sensor.tipo
FROM medicao
INNER JOIN sensor
ON medicao.fk_id_sensor = sensor.id
INNER JOIN usuario
ON usuario.id = medicao.id;

SELECT * FROM usuario;


INSERT INTO usuario (id, nome, email, senha, acesso) VALUES
(21, 'root', 'root@gmail.com', 11111, 'root');