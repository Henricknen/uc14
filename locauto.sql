
create table automoveis (
    renavam int primary key,
    marca varchar(20),
    modelo varchar(20),
    placa varchar(7),
    preco float    
);


create table condutores (
    cnh int primary key,
    nome varchar(20),
    nasc date  
);


create table reservas (
    numero int primary key,
    saida datetime,
    retorno datetime default null,
    preco float,
    cnh int,
    renavam int
);

insert into condutores values(10000,"Valdir Melo","1989/03/11");
insert into condutores values(10100,"Pedro Cabral","1985/10/29");
insert into condutores values(10200,"Rosa Almeida","1990/07/05");
insert into condutores values(10300,"Beatriz Salgado","1992/08/15");

insert into automoveis values(30000,"VW","Fox","ABC1234",55.00);
insert into automoveis values(30100,"GM","Onix","DEF3456",65.00);
insert into automoveis values(30200,"Ford","Fiesta","XYZ5678",75.00);
insert into automoveis values(30300,"Fiat","Palio","JKL4545",45.00);

insert into reservas values(50000,'2022/02/15','2022/02/18',55.00,10000,30000);
insert into reservas values(50100,'2022/02/20','2022/02/25',65.00,10300,30100);
insert into reservas (numero,saida,preco,cnh,renavam) values(50200,'2022/03/01',75.00,10200,30200);








	