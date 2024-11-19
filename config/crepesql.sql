create database crepe;
use crepe;

create table usuario (
id int auto_increment primary key,
nome varchar (200),
dataNasc date,
email varchar (60) unique,
senha varchar (30),
endereco varchar (30)
);