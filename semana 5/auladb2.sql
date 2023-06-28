use dbsenac;

select * from pessoa;



insert into pessoa 
(nome,idade, salario)
values
('aloisio ', 35, 2000.45),
('lua ', 21, 3000.45),
('miguel ', 25, 4000.45),
('gael ', 20, 2000.45),
('Pietro ', 20, 2000.45),
('vitoria ', 35, 2000.45);


use dbsenac;

create table tabelaaluno (
	id int not null auto_increment,
    aluno varchar(50),
    turma int(4),
    mensalidade float(10,2), 
    datainicio date,
    primary key(id)
);



select * from tabelaaluno;

insert into tabelaaluno
(aluno, turma, mensalidade, datainicio)
values
('Cris', 3001, 456.87, '2023-02-01'),
('Luana', 3002, 456.87, '2023-02-05'),
('Pedro', 3001, 456.87, '2023-02-09'),
('Paulo', 3002, 456.87, '2023-02-11');



select aluno,mensalidade from tabelaaluno where turma=3001;



select * from tabelaaluno where id=2;