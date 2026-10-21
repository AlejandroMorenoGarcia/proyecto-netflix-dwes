DELIMITER //
DROP TABLE IF EXISTS users_peliculas;//
DROP TABLE IF EXISTS users;//
DROP TABLE IF EXISTS peliculas;//

CREATE TABLE users(
    id integer PRIMARY KEY AUTO_INCREMENT,
    name varchar(255),
    address varchar(255),
    phone varchar(16),
    birthdate date,
    password varchar(255),
    email varchar(255) UNIQUE
);//

CREATE TABLE peliculas(
    uuid varchar(32) PRIMARY KEY,
    name varchar(255),
    lenght integer,
    synopsis longtext,
    type varchar(10)
);//

CREATE TABLE users_peliculas(
    id_user int references users(id) ON DELETE CASCADE ,
    uuid_pelicula varchar(32) references peliculas(uuid) ON DELETE CASCADE ,
    constraint pk_users_peluculas PRIMARY KEY(id_user,uuid_pelicula)
);//

insert into users (name, address, phone, birthdate, password, email)
    VALUES ('Alejandro Moreno', 'C/Inventada,2', '697642499',
            STR_TO_DATE('16/02/2001','%d/%c/%Y'), 'alejandro','mailinventado@gmail.com')