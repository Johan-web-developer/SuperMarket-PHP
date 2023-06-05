CREATE DATABASE SuperMarketJav;


CREATE TABLE categorias(
    id INT primary key AUTO_INCREMENT,
    nombreCategoria VARCHAR (50) NOT NULL,
    descripcion VARCHAR (50),
    imagen VARCHAR (40)
);

CREATE TABLE users(
    id INT primary key AUTO_INCREMENT,
    idCliente INT NOT NULL,
    email VARCHAR (80) NOT NULL,
    username VARCHAR (80) NOT NULL,
    password VARCHAR (60) NOT NULL,
    FOREIGN KEY (idCliente) REFERENCES clientes(id)
);
use SuperMarketJav;