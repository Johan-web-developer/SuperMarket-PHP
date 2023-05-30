<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

require_once("config.php");

$data = new Config();

$all = $data->obtener();
$categoria = $data->obtenerCategoria();
$proveedor = $data->obtenerProveedor();

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PRODUCTOS</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/productos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <div class="boxes">
    <div class="izquierda">
      <h1>MENU</h1>
      <div class="flexMenu">
        <a href="../CATEGORIAS/categorias.php" style="text-decoration: none" class="colora">CATEGORIAS</a>
        <a href="../CLIENTES/clientes.php" style="text-decoration: none" class="colora">CLIENTES</a>
        <a href="../EMPLEADOS/empleados.php" style="text-decoration: none" class="colora">EMPLEADOS</a>
        <a href="../FACTURAS/facturas.php" style="text-decoration: none" class="colora">FACTURAS</a>
        <a href="../DETALLES/detalles.php" style="text-decoration: none" class="colora">DETALLE DE FACTURAS</a>
        <a href="../PRODUCTOS/productos.php" style="text-decoration: none" class="colora">PRODUCTOS</a>
        <a href="../PROVEEDORES/proveedores.php" style="text-decoration: none" class="colora">PROVEEDORES</a>
      </div>
      </div>
    <div class="container">
      <div class="boton">
        <button class="btn btn-success botoncito" data-bs-toggle="modal" data-bs-target="#registrarProductos"><i class="bi bi-person-add" ></i></button>
      </div>
      <h1>PRODUCTOS</h1>
      <table class="table table-stripped table-success" style="text-align:center;">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE DE CATEGORIA</th>
                    <th scope="col">PRECIO</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">UNIDADES</th>
                    <th scope="col">NOMBRE DEL PROVEEDOR</th>
                    <th scope="col">NOMBRE DEL PRODUCTO</th>
                    <th scope="col">DESCONTINUADO</th>
                    <th scope="col">BORRAR</th>
                    <th scope="col">EDITAR</th>
                  </tr>
                </thead>
                <tbody class="tabla" id="tabla">
                    <?php
                      foreach($all as $key => $value){
                    ?>
                    <tr>
                      <td><?= $value['id']?></td>
                      <td><?= $value['nombreCategoria']?></td>
                      <td><?= $value['precio']?></td>
                      <td><?= $value['stock']?></td>
                      <td><?= $value['unidades']?></td>
                      <td><?= $value['nombreProveedor']?></td>
                      <td><?= $value['nombre']?></td>
                      <td><?= $value['descontinuado']?></td>
                      <td>
                        <a class="btn btn-danger" href="borrarProducto.php?id=<?=$value['id']?>&req=delete">Borrar</a>
                      </td>
                      <td>
                        <a class="btn btn-warning" href="actualizarProductos.php?id=<?=$value['id']?>">Editar</a>
                      </td>
                    </tr>
                        <?php }?>
                </tbody>
              </table>
    </div>
  </div>











<div class="modal fade" id="registrarProductos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Producto</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-color: rgb(231, 253, 246);">
            <form class="col d-flex flex-wrap" action="registrarProducto.php" method="post">
              <div class="mb-1 col-12">
                <label for="id_categoria" class="form-label">¿De qué categoria es el producto?</label>
                  <select name="id_categoria" id="id_categoria" class="form-select"  >
                    <option value="nothing">Seleccione la categoria</option>
                    <?php
                      foreach($categoria as $key => $valueC){
                    ?>
                    <option value="<?= $valueC['id']?>"><?= $valueC['nombreCategoria']?></option>
                  <?php }?>
                </select>
              </div>
              <div class="mb-1 col-12">
                <label for="precio" class="form-label">Precio</label>
                <input 
                  type="text"
                  id="precio"
                  name="precio"
                  class="form-control"  
                />
              </div>
              <div class="mb-1 col-12">
                <label for="stock" class="form-label">Stock</label>
                <input 
                  type="text"
                  id="stock"
                  name="stock"
                  class="form-control"  
                />
              </div>
              <div class="mb-1 col-12">
                <label for="unidades" class="form-label">Unidades Pedidas</label>
                <input 
                  type="text"
                  id="unidades"
                  name="unidades"
                  class="form-control"  
                />
              </div>
              <div class="mb-1 col-12">
                <label for="id_proveedor" class="form-label">¿Hacia qué proveedor se dirige?</label>
                  <select name="id_proveedor" id="id_proveedor" class="form-select"  >
                    <option value="nothing">Seleccione el proveedor</option>
                    <?php
                      foreach($proveedor as $key => $valueP){
                    ?>
                    <option value="<?= $valueP['id']?>"><?= $valueP['nombreProveedor']?></option>
                  <?php }?>
                </select>
              </div>
              <div class="mb-1 col-12">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input 
                  type="text"
                  id="nombre"
                  name="nombre"
                  class="form-control"  
                />
              </div>
              <div class="mb-1 col-12">
                  <label for="descontinuado" class="form-label">Descontinuacion</label>
                  <select name="descontinuado" id="descontinuado" class="form-select">
                    <option value="nothing">¿Es descontinuado?</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
              </div>
              <div class=" col-12 m-2">
                <input type="submit" class="btn btn-primary" value="Enviar" name="guardar"/>
              </div>
            </form>  
         </div>       
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>

      <footer class="foot">
          <h5>© Copyright - TODOS LOS DERECHOS RESERVADOS | Javier Andrés Núñez Sánchez PROFESSIONAL DESIGNER</h5>
          <p>Colombia - Santander</p>
        </footer>
</body>

</html>