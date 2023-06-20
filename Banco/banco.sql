create database Prova2;
drop table IF exists fluxo_caixa;
create table fluxo_caixa (
	id INTEGER not null AUTO_INCREMENT,
    data DATE not null,
    tipo VARCHAR(10) not null,
    valor DECIMAL(10,2) not null,
    historico VARCHAR(150) not null,
    cheque VARCHAR(3) not null,
    PRIMARY KEY (id) );
