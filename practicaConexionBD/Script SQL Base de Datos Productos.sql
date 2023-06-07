create database negociojb;
use negociojb;

create table productos (
idProducto int (10) auto_increment primary key,
producto varchar (10),
precio int (10)
);

alter table productos auto_increment = 100;

select * from productos;

