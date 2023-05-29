CREATE DATABASE SuperMarketJav

CREATE TABLE productos(
    id INT primary key AUTO_INCREMENT,
    id_categoria INT,
    precio VARCHAR (50),
    stock VARCHAR (50),
    unidades VARCHAR (50),
    id_proveedor INT,
    nombre VARCHAR (50),
    descontinuado VARCHAR (50),

    FOREIGN KEY fk_id_categoria(id_categoria)
    REFERENCES categorias(id),

    FOREIGN KEY fk_id_proveedor(id_proveedor)
    REFERENCES proveedores(id)

);