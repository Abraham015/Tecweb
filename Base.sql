create database proyecto;
use proyecto;

create table administrador(
	usuario varchar(50),
    clave varchar(10)
);

create table identidad(
	Boleta varchar(10) primary key unique,
    Nombre varchar(30),
    AP varchar(30),
    AM varchar(30),
    fecha varchar(10),
    Genero varchar(10),
    CURP varchar(18)
);

create table Contacto(
	Calle varchar(250),
    Colonia varchar(100),
    CP varchar(10),
    Celular int,
    Correo varchar(50),
    Boleta varchar(10)
);

create table Procedencia(
	Escuela varchar(400),
    Entidad varchar(30),
    Promedio int,
    opcion varchar(15),
    Boleta varchar(10)
);

alter table identidad;
alter table Contacto;
alter table Procedencia;

insert into administrador values ("ESCOMADMIN2021","admin");
select * from administrador;
select * from identidad;
select * from Contacto;
select * from Procedencia;
drop database proyecto;