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
create table if not exists categorie(
    id int primary key auto_increment,
    name varchar(100) not null,
    date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table if not exists cour(
    id int primary key auto_increment ,
    titre varchar(50) not null,
    description text ,
    content  text ,
    id_categorie int not null,
    id_teacher int not null,
    date_created timestamp default current_timestamp,
    constraint  FK_autour foreign key (id_teacher)  references utilisateur(id)
    constraint  FK_categorie foreign key (id_categorie)  references categorie(id)
);
create table if not exists enrollment(
    id int primary key auto_increment,
    id_cour int not null,
    id_student int not null,
    date_incribt timestamp efault current_timestamp,
    constraint  FK_Forstudent  foreign key (id_student)  references utilisateur(id)
    constraint  FK_Forcour foreign key (id_cour)  references cour(id)
);
create index  searchEmail  on utilisateur (email);