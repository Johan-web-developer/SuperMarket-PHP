CREATE DATABASE SuperMarketJav

CREATE TABLE categorias(
    id INT primary key AUTO_INCREMENT,
    nombreCategoria VARCHAR (50) NOT NULL,
    descripcion VARCHAR (50),
    imagen VARCHAR (40)
);