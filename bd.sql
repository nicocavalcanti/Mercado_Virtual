create database bd;
#drop database bd;
use bd;

Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
login Varchar(30),
senha Varchar(40),
nome varchar(55),
cidade varchar(40),
numero_celular fixed(00000000000),

Primary Key (ID)) ENGINE = MyISAM;
-- select * from usuarios;
