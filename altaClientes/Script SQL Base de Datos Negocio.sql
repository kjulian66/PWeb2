create database negocio;
use negocio;

create table cliente(
idCliente int auto_increment primary key,
nombre varchar (30),
apellido varchar (30),
dni int (8),
domicilio varchar (100),
fechaNac date,
telefono bigint
);

select * from cliente;