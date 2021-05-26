create database proyecto;
use proyecto;

create table identidad(
	Boleta varchar(10) primary key,
    Nombre varchar(30),
    AP varchar(30),
    AM varchar(30),
    fecha date,
    Genero varchar(10),
    CURP varchar(20)
);

create table Contacto(
	Calle varchar(250),
    Colonia varchar(100),
    CP int,
    Celular int,
    Correo varchar(50)
);

create table Procedencia(
	Escuela varchar(100),
    Entidad varchar(30),
    Promedio float,
    opcion varchar(15)
);

select * from Contacto;