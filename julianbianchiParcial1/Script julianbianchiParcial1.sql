create database julianbianchiParcial1;
use julianbianchiParcial1;

create table empleados (
idEmpleado int (5) auto_increment,
nombre varchar (10),
apellido varchar (10),
documento int (8),
fechaNac date,
salario int (10),
primary key (idEmpleado)
);


alter table empleados auto_increment = 1000;

select * from empleados;

drop table empleados;

