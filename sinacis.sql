create database sinacis;

use sinacis;

create table clientes(
  cedula bigint,
  nombre varchar(30),
  telefono bigint,
  placa varchar(6),
  marca varchar(6),
  descripcion varchar(50),
  color varchar(20),
  primary key(cedula));


create table citas(
	nombre varchar (20),
	cedula int ,
	placa varchar(20),
	descripcion varchar(50),
	primary key (placa));
	


