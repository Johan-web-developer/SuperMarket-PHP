CREATE DATABASE SuperMarketJav

CREATE TABLE proveedores(
    id INT primary key AUTO_INCREMENT,
    nombre VARCHAR (50) NOT NULL,
    telefono VARCHAR (50),
    ciudad VARCHAR (50)
);