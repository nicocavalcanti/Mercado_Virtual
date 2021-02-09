dcreate database bd;
-- drop database bd;

use bd;

Create table usuarios (
apelido_usuario varchar(17) not null,
senha Varchar(40) not null,
nome varchar(55) not null,
cidade varchar(40) not null,
email varchar(50)not null unique,
numero_celular char(14),
Primary Key (apelido_usuario)
);

-- drop table usuarios;
-- select * from usuarios;
-- insert into usuarios values("Romarinho","1234", "Agnaldo Romario de Souza", "Natal", "romaroA@gmail.com","xxxxxxxxxxxxxx");
create table carros(
 id_carro char(6) not null,
 marca varchar (40) not null,
 modelo varchar(40) not null,
 ano smallint not null,
 quilometragem float,
 ar_condicionado char(3),
 vidro char(3),
 sensor char(3),
 direcao char(3),
 som char(3),
 alarme char(3),
 travas char(3),
 cor varchar(40),
 combustivel varchar(40),
 primary key (id_carro)
 );
-- insert into carros values ("12345678901234574", "Chevrolet", "Camaro","2021",1000,"vidro, direção, alarme, travas, ar, sensor, som","Azul", "GNV" );
 -- select * from carros;
-- drop table carros;

 create table anuncio(
 id_anuncio int auto_increment,
 apelido_usuario varchar(17) not null,
 id_carro char(6) not null,
 data datetime not null,
 estado varchar(16),
 cidade varchar(25),
 descrição varchar(160),
 preco_pedido float,
 foreign key (apelido_usuario) references usuarios(apelido_usuario),
 foreign key (id_carro) references carros(id_carro),
 primary key(id_anuncio)
 );
 
 -- select * from anuncio;
 -- drop table anuncio;
 
 create table pesquisa(
 id_pesquisa int not null auto_increment,
 apelido_usuario varchar(17),
 modelo_filtrado varchar(20),
 date_inicial smallint,
 date_final smallint,
 preco_inicial float,
 preco_final float,
 foreign key(apelido_usuario) references usuarios(apelido_usuario),
 primary key(id_pesquisa)
 
 );
 -- drop table pesquisa;
 
