CREATE DATABASE SuperMarketJav;

CREATE TABLE facturas(
    id INT primary key AUTO_INCREMENT,
    nombreFactura VARCHAR (50),
    id_empleado INT,
    id_cliente INT,

    FOREIGN KEY fk_id_empleado(id_empleado)
    REFERENCES empleados(id),

    FOREIGN KEY fk_id_cliente(id_cliente)
    REFERENCES clientes(id),

    fecha VARCHAR (50)
);