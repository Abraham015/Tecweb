create database proyecto;
use proyecto;

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
    CP int,
    Celular int,
    Correo varchar(50)
);

create table Procedencia(
	Escuela varchar(400),
    Entidad varchar(30),
    Promedio int,
    opcion varchar(15)
);
select * from identidad;
select * from Contacto;
select * from Procedencia;
drop database proyecto;