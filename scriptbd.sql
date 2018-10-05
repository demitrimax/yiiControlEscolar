#archivo sql

#show databases;
drop database cescolar;
create database cescolar;
use cescolar;
create table alumnos (matricula varchar(20), nombre varchar(35), apaterno varchar(35), amaterno varchar(35));
create table materias (clave varchar(20), nombre varchar(35));

/* ---INDICES */

create index alumnos_matriculas on alumnos(matricula);


#select * from alumnos a where a.id_esp = '1' union select * from alumnos b where b.id_esp = '2';
#select * from alumnos a, alumnos b where a.id_esp ='1' and b.id_esp = '2';