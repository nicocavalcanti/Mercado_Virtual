create database bd;
#drop database bd;
use bd;

Create table usuarios (
id_usuario Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
senha Varchar(40) not null,
nome varchar(55) not null,
cidade varchar(40) not null,
email varchar(50)not null,
numero_celular char(14),
Primary Key (id_usuario)
);
-- select * from usuarios;
create table carros(
 chassi char NOT NULL,
 marca varchar (40) not null,
 modelo varchar(40) not null,
 ano char(4)not null,
 cor varchar(40),
 combustivel varchar(40),
 primary key (chassi)
 );
             
 create table anuncio(
 id_anuncio int auto_increment,
 id_usuario int not null,
 id_carro int not null,
 data datetime() not null,
 descrição varchar(160),
 foreign key (id_usuario) references usuarios(id_usuario),
 foreign key (id_carro) references carros(chassi),
 primary key(id_anuncio)
 );
 
 create table pesquisa(
 id_pesquisa int not null auto_increment,
 id_usuario int not null,
 modelo_filtrado varchar(20),
 date_inicial datetime,
 date_final datetime,
 preco_inicial float,
 preco_final float,
 primary key(id_pesquisa)
 
 );
 -- select * from carros;


