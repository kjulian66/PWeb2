create database julianbianchiGuia2;
use julianbianchiGuia2;

create table productos (
idProducto int (5) auto_increment,
descripcion varchar (10),
precio float (5),
primary key (idProducto)
);


alter table productos auto_increment = 1000;

select * from productos;

drop table productos;

drop database julianbianchiGuia2;

