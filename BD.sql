CREATE DATABASE DogSafer;
USE DogSafer;

CREATE TABLE cliente (
    idCliente int(11) not null primary key auto_increment,
	idAnimal int(11),
    nome varchar(50),
    email varchar(40),
    cpf varchar(13),
    celular int(11),
    CEP varchar(10),
    rua varchar(40),
    bairro varchar(40),
    cidade varchar(40),
    estado varchar(20),
    senha varchar(50)
);

CREATE TABLE animal(
    idAnimal int(11) primary key auto_increment not null,
    nome varchar(20)
);

CREATE TABLE coleira(
    idAnimal int(11),
    num_coleira int(11),
    mensage_coleira varchar(20)
);