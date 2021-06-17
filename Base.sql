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
    CP varchar(10),
    Celular varchar(11),
    Correo varchar(50),
    Boleta varchar(10)
);

create table Procedencia(
    Escuela varchar(400),
    Entidad varchar(30),
    Promedio double,
    opcion varchar(15),
    Boleta varchar(10)
);

create table examen(
    Num int auto_increment,
    horario varchar(100),
    laboratorio varchar(50),
    Boletaex varchar(10),
    primary key (Num)
);

alter table identidad;
alter table Contacto;
alter table Procedencia;
alter table examen;

insert into examen values(3,'prueba', 'prueba', 'prueba');

select * from identidad;
select * from Contacto;
select * from Procedencia;
select * from examen;

drop database proyecto;