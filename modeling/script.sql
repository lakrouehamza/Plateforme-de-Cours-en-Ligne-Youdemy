create database youdemy 
use youdemy 
create table if not exists utilisateur (
    id int primary key auto_increment,
    name varchar(20) not null,
    firstName  varchar(20) not null,
    email varchar(20) not null,
    phone varchar(20) not null,
    role enum('admin','teacher','student'),
    password:  varchar(100) not null,
    date_incribt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table if not exists student (
    id int primary key,
    ban inyint default 0,
    constraint FK_student  foreign key(id) references  utilisateur(id) 
);
create table if not exists  teacher(
    id int primary key,
    ban inyint default 0,
    constraint FK_teacher  foreign key(id) references  utilisateur(id) 
);
create table if not exists  admin(
    id int primary key,
    constraint FK_admin  foreign key(id) references  utilisateur(id) 
);