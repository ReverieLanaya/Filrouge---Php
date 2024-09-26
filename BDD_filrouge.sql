create database if not exists dbfilrouge;
use dbfilrouge; 

create table if not exists reservation (
id int primary key auto_increment not null, 
nom varchar(50) not null, 
email varchar(100) not null, 
numero numeric(15) not null,
`date` date not null,
heure datetime not null, 
nbpersonne numeric(1) not null
);