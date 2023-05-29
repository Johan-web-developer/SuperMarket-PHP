CREATE DATABASE SuperMarketJav

CREATE TABLE empleados(
    id INT primary key AUTO_INCREMENT,
    nombre VARCHAR (50) NOT NULL,
    celular VARCHAR (50),
    direccion VARCHAR (50),
    imagen VARCHAR (40)
);