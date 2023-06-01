CREATE DATABASE registro;


CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idCliente INT NOT NULL,
    email VARCHAR(255) NOT NULL,
    nombreuser VARCHAR(55) NOT NULL,
    contraseña VARCHAR(55) NOT NULL,
    FOREIGN KEY (idCliente) REFERENCES clientes(id)
);

use SuperMarketJav;

drop database registro;

drop table users;