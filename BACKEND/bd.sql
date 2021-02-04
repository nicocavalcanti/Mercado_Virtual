create database bd;
-- drop database bd;

use bd;

Create table usuarios (
login varchar(20) not null unique,
apelido_usuario varchar(17) not null,
senha Varchar(40) not null,
nome varchar(55) not null,
cidade varchar(40) not null,
email varchar(50)not null unique,
numero_celular char(14),
Primary Key (login)
);

-- drop table usuarios;
-- select * from usuarios;
-- insert into usuarios values("Romarinho","1234", "Agnaldo Romario de Souza", "Natal", "romaroA@gmail.com","xxxxxxxxxxxxxx");
create table carros(
 chassi char(17) NOT NULL,
 marca varchar (40) not null,
 modelo varchar(40) not null,
 ano char(4) not null,
 quilometragem float,
 opcionais varchar(76),
 cor varchar(40),
 combustivel varchar(40),
 primary key (chassi)
 );
-- insert into carros values ("12345678901234574", "Chevrolet", "Camaro","2021",1000,"vidro, direção, alarme, travas, ar, sensor, som","Azul", "GNV" );
 -- select * from carros;
-- drop table carros;

 create table anuncio(
 id_anuncio int auto_increment,
 apelido_usuario varchar(17) not null,
 chassi char(17)  not null,
 data datetime not null,
 localização varchar(25),
 descrição varchar(160),
 preco_pedido float,
 foreign key (apelido_usuario) references usuarios(login),
 foreign key (chassi) references carros(chassi),
 primary key(id_anuncio)
 );
 
 -- select * from anuncio;
 -- drop table anuncio;
 
 create table pesquisa(
 id_pesquisa int not null auto_increment,
 apelido_usuario varchar(17),
 modelo_filtrado varchar(20),
 date_inicial datetime,
 date_final datetime,
 preco_inicial float,
 preco_final float,
 foreign key(apelido_usuario) references usuarios(login),
 primary key(id_pesquisa)
 
 );
 -- drop table pesquisa;
 
