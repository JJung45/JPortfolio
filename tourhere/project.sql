create database project;
use project;

create table if not exists project(
	userName varchar(50) not null,
    userId varchar(50) not null,
    userPw varchar(50) not null,
    userEmail varchar(50) not null,
    primary key(userId)
)default charset=utf8;