/* sao os comentarios*/
/*
cria o banco de dados: create database databasename
*/
CREATE DATABASE BDSENAC;

/* Ligar o banco de dados */
use bdsenac;

create table pessoa (
  id int not null auto_increment,
  nome varchar(56),
  idade int(3),
  salario float(10,2),
  primary key(id)
);  


insert into pessoa 
(nome,idade, salario)
values
('aloisio ', 35, 2000.45),
('lua ', 21, 3000.45),
('miguel ', 25, 4000.45),
('gael ', 20, 2000.45),
('vitoria ', 35, 2000.45);

select * from pessoa;


update pessoa set idade=18 where id=5;
delete from pessoa where id=3;
update pessoa set idade=15 where id=6;


select * from pessoa 
where nome like 'l%';
