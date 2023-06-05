CREATE DATABASE SuperMarketJav;

CREATE TABLE clientes(
    id INT primary key AUTO_INCREMENT,
    nombreCliente VARCHAR (50) NOT NULL,
    celular VARCHAR (50),
    compañia VARCHAR (50)
);