drop database if exists `student`;
create database `student`;
use `student`;
create table
`studentdetails`(
    `id` int primary key auto_increment,
    `name` varchar(255) not null,
    `password` varchar(255) not null,
    `std` varchar(255) not null
);  