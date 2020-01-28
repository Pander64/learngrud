create database videocrud;
use videocrud;

create table usuarios
(  uduariosid int not null primary key auto_increment,
   nombre varchar(100) not null,
   apellidos varchar(100) not null,
   email varchar(100) not null,
   edad int not null,
   ciudad varchar(100) not null
) engine = innodb;

insert into usuarios values
  (100, 'Homer','Simpson','pander@hotmail.com', 21,'742 Evergreen Terrace, Springfield'),
  (101, 'John','Doe','pander@hotmail.com', 22,  '54 High Street, Bagshot'),
  (102, 'Jane','Smith','pander@hotmail.com', 33,  '5 Church Lane, Hambridge'),
  (103, 'Henry','Higgins','pander@hotmail.com', 32,  '14 Mayfair');