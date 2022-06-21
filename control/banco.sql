create database Prova_filmes;

use Prova_filmes;

create table filmes
(
	cod_filmes int not null primary key auto_increment,
    nome_filme varchar(30) not null,
    genero_filme varchar(15) not null,
    classificaçao int not null,
    diretor_filme varchar(80) not null,
    estudio_filme varchar(40) not null,
    elenco_filme varchar(150) not null,
    ano_lancamento date not null
);

alter table filmes
add column imagem varchar(255);

select * from filmes;

desc filmes;