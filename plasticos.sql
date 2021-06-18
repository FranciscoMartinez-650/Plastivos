create database plasticos;
use plasticos;


create table Usuarios(
	
    id_usuario int auto_increment primary key,
    usuario varchar(50) not null,
    contrasena varchar(20) not null
);
select * from logeo;
drop table logeo;
create table informacion(
    id_informacion int auto_increment primary key,
    id_usuario int not null,
    nombre varchar(100) not null,
    apepat varchar(100) not null,
    apemat varchar(100) not null,
    numero int not null,
    usuario varchar(50) not null,
    contrasena varchar(20) not null,
    FOREIGN KEY (id_usuario) REFERENCES logeo(id_usuario)
);
drop table informacion;

create table plastico(
	
    id_plasticos int primary key auto_increment,
    tipo_plastico varchar (150) not null,
    cantidad_gramos int not null,
    kilos_dia int not null,
    total_semana int not null
);

ALTER USER 'root'@'localhost'
IDENTIFIED WITH mysql_native_password
BY 'americayya99'; 