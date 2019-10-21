create database cetisphpv;
use cetisphpv;

create user 'vespertino'@'localhost' identified by '123';
grant all privileges on cetisphpv.* to 'vespertino'@'localhost';

create table users (
    `id` int auto_increment primary key,
    `name` varchar(16) not null unique,
    `password` varchar(200) not null,
    `email` varchar(200) not null unique,
    `firstname` varchar(50) not null,
    `lastname` varchar(50) not null default 'X',
    `remember_token` varchar(200) default null,
    `status` enum('0','1') not null default '1',
    `last_login` timestamp default current_timestamp
) engine=innodb, charset=utf8, collate=utf8_general_ci;

insert into users (name,password,email,firstname,lastname)
values ('bidkar','321','bidkar@cetis108.edu.mx','Bidkar','Aragon C');