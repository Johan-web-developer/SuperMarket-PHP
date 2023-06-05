CREATE DATABASE SuperMarketJav;

CREATE TABLE detalles(
    id INT primary key AUTO_INCREMENT,
    id_factura INT,
    id_producto INT,

    FOREIGN KEY fk_id_factura(id_factura)
    REFERENCES facturas(id),

    FOREIGN KEY fk_id_producto(id_producto)
    REFERENCES productos(id),

    cantidad VARCHAR (50),
    precio VARCHAR (50)
);