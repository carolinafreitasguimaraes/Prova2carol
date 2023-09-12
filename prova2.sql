drop database if exists petshop;
create database petshop;
use petshop;

create table animal
(
    id        integer not null auto_increment,
    nome      varchar(100) not null,
    raca      varchar(050) null,
    especie   varchar(050) not null, 
    nome_dono varchar(100) not null,
    fone_dono varchar(020) not null,
    mail_dono varchar(020) not null,
    primary key (id)
);