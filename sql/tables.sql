drop database if exists wod;
create database wod;
use wod;

create table users (
  email varchar(60) not null primary key,
  password varchar(128) not null
);

create table characters (
  id int(11) not null primary key auto_increment,
  email varchar(60) not null,
  name varchar(60) not null,
  filename varchar(255) not null,
  password varchar(128) null
);

create table character_history (
  id int(11) not null primary key auto_increment,
  cid int(11) not null,
  date datetime not null,
  filename varchar(255) not null
);

create table diceroller (
  id int(11) not null primary key auto_increment,
  email varchar(60) not null,
  name varchar(60) not null,
  action varchar(255) not null,
  number int(2) not null,
  difficulty int(1) not null,
  result varchar(255) not null,
  rollagain boolean not null,
  willpower boolean not null,
  bonussuccess boolean not null
);




