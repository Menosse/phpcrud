-- ref https://www.w3schools.com/sql/sql_create_db.asp
-- create db "testdb"
CREATE DATABASE testdb;

-- create table "users"

CREATE TABLE users (
    id int AUTO_INCREMENT PRIMARY KEY,
    firstname varchar(255),
    lastname varchar(255),
    email varchar(255),
    password varchar(255),
    gender varchar(20)
);