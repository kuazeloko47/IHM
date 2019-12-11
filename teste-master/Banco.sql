create database banco_ihm;
create table livros
(
	isbn         text not null unique,
    titulo_livro varchar(50) not null,
    autor        varchar(50) not null,
    descricao    text        not null,
    is_ativo     bool        default true
);