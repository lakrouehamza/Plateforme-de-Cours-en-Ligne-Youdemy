create database youdemy 
use youdemy 
create table if not exists utilisateur (
    id int primary key auto_incriment,
    name varchar(20) not null,
    firstName  varchar(20) not null,
    email varchar(20) not null,
    phone varchar(20) not null,
    password:  varchar(100) not null
)