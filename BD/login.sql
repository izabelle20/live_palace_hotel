-- Remove o banco de dados se já existir para evitar conflitos
DROP DATABASE IF EXISTS hotel;

-- Cria um novo banco de dados chamado "hotel"
CREATE DATABASE hotel;

-- Seleciona o banco de dados recém-criado para uso
USE hotel;

-- Cria a tabela para armazenar informações de login
CREATE TABLE login (
  usuario_id INT NOT NULL AUTO_INCREMENT,
  email VARCHAR(50) NOT NULL,
  nome VARCHAR(45) NOT NULL,
  senha VARCHAR(255) NOT NULL,
  data_cadastro DATETIME NOT NULL,
  PRIMARY KEY (usuario_id)
);

-- Cria a tabela para armazenar informações de reserva
CREATE TABLE reservar(
  id INT NOT NULL AUTO_INCREMENT,
  v_entrada DATE NOT NULL,
  v_saida DATE NOT NULL,
  quartos INT NOT NULL,
  PRIMARY KEY (id)
);

-- Cria a tabela para armazenar informações de contato
CREATE TABLE contato (
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(100) NOT NULL,
  email VARCHAR(100) NOT NULL,
  mensagem TEXT NOT NULL,
  data_envio DATETIME NOT NULL,
  PRIMARY KEY (id)
);

-- Cria a tabela para armazenar informações de hospedagem
CREATE TABLE hospedagem (
  hospedagem_id INT NOT NULL AUTO_INCREMENT,
  usuario_id INT NOT NULL,
  reserva_id INT NOT NULL,
  check_in DATE NOT NULL,
  check_out DATE NOT NULL,
  pessoas INT NOT NULL, 
  PRIMARY KEY (hospedagem_id),
  FOREIGN KEY (usuario_id) REFERENCES login(usuario_id),
  FOREIGN KEY (reserva_id) REFERENCES reservar(id)
);

-- Insere alguns dados de exemplo na tabela de login
INSERT INTO login (email, nome, senha, data_cadastro) VALUES ("jp@gmail.com", "joao", "1234", NOW());
INSERT INTO login (email, nome, senha, data_cadastro) VALUES ("lari@gmail.com", "lari", "4567", NOW());

-- Insere alguns dados de exemplo na tabela de reserva
INSERT INTO reservar (v_entrada, v_saida, quartos) VALUES ("2024-04-04", "2024-06-15", 1);
INSERT INTO reservar (v_entrada, v_saida, quartos) VALUES ("2024-04-06", "2024-06-12", 2);

-- Insere alguns dados de exemplo na tabela de hospedagem
INSERT INTO hospedagem (usuario_id, reserva_id, check_in, check_out, pessoas) VALUES (1, 1, "2024-04-04", "2024-06-15", 2);
INSERT INTO hospedagem (usuario_id, reserva_id, check_in, check_out, pessoas) VALUES (2, 2, "2024-04-06", "2024-06-12", 4);

-- Seleciona todos os dados da tabela de login para verificar se os dados foram inseridos corretamente
SELECT * FROM login;

-- Seleciona todos os dados da tabela de reserva para verificar se os dados foram inseridos corretamente
SELECT * FROM reservar;

-- Seleciona todos os dados da tabela de hospedagem para verificar se os dados foram inseridos corretamente
SELECT * FROM hospedagem;
