DROP DATABASE internetbanking;

CREATE DATABASE IF NOT EXISTS internetbanking;

USE internetbanking;

CREATE TABLE IF NOT EXISTS usuario (
                                        nome VARCHAR(100) NOT NULL,
                                        sobrenome VARCHAR(100) NOT NULL,
                                        cpf CHAR(11) NOT NULL,
                                        senha VARCHAR(100) NOT NULL,
                                        fone CHAR(11) NOT NULL,
                                        email VARCHAR(100) NOT NULL,
                                        balanco INT NOT NULL,
                                        PRIMARY KEY (cpf));