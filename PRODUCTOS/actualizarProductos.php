<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

require_once("config.php");
$data = new Config();

$id = $_GET['id'];
$data-> setId($id);
$rer = $data->seleccionar();
$categoria = $data->obtenerCategoria();
$proveedor = $data->obtenerProveedor();
$vall = $rer[0];

if (isset($_POST["editar"])){
  $data->setId_categoria($_POST["id_categoria"]);
  $data->setPrecio($_POST["precio"]);
  $data->setStock($_POST['stock']);
  $data->setUnidades($_POST['unidades']);
  $data->setId_proveedor($_POST['id_proveedor']);
  $data->setNombre($_POST['nombre']);
  $data->setDescontinuado($_POST['descontinuado']);

  $data-> update();
  echo "<script>alert('Producto actualizado satisfactoriamente'); document.location='productos.php'</script>";
}


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Producto</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/actualizar.css">

</head>

<body>
    <h1 class="m-2">Editar Producto</h1>
    <div id="contenido">
      <form class="col d-flex flex-wrap" action=""  method="post">
              <div class="mb-1 col-12">
                <label for="id_categoria" class="form-label">Categoria</label>
                <select name="id_categoria" id="id_categoria" class="form-select" value ="<?php echo $vall['id_categoria'];?>">
                    <option value="nothing">Seleccione la categoria</option>
                    <?php
                      foreach($categoria as $key => $valueC){
                    ?>
                    <option value="<?= $valueC['id']?>"><?= $valueC['nombre']?></option>
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
                  value ="<?php echo $vall['precio'];?>"
                />
              </div>
              <div class="mb-1 col-12">
                <label for="stock" class="form-label">Stock</label>
                <input 
                  type="text"
                  id="stock"
                  name="stock"
                  class="form-control"  
                  value ="<?php echo $vall['stock'];?>"
                />
              </div>
              <div class="mb-1 col-12">
                <label for="unidades" class="form-label">Unidades Pedidas</label>
                <input 
                  type="text"
                  id="unidades"
                  name="unidades"
                  class="form-control"  
                  value ="<?php echo $vall['unidades'];?>"
                />
              </div>
              <div class="mb-1 col-12">
                <label for="id_proveedor" class="form-label">Proveedor</label>
                <select name="id_proveedor" id="id_proveedor" class="form-select" value ="<?php echo $vall['id_proveedor'];?>">
                    <option value="nothing">Seleccione la categoria</option>
                    <?php
                      foreach($proveedor as $key => $valueP){
                    ?>
                    <option value="<?= $valueP['id']?>"><?= $valueP['nombre']?></option>
                  <?php }?>
                  </select>  
              </div>
              <div class="mb-1 col-12">
                <label for="unidades" class="form-label">Nombre del Producto</label>
                <input 
                  type="text"
                  id="nombre"
                  name="nombre"
                  class="form-control"  
                  value ="<?php echo $vall['nombre'];?>"
                />
              </div>
              <div class="mb-1 col-12">
                  <label for="descontinuado" class="form-label">Descontinuacion</label>
                  <select name="descontinuado" id="descontinuado" class="form-select" value ="<?php echo $vall['descontinuado'];?>">
                    <option value="nothing">¿Es descontinuado?</option>
                    <option value="Si">Sí</option>
                    <option value="No">No</option>
                  </select>
              </div>
                 <div class=" col-12 m-2">
                <input type="submit" class="btn btn-success" value="Guardar Cambios" name="editar"/>
                <button class="btn btn-light"><a href="productos.php">Volver</a></button>
              </div>
            </form>  
        <div id="charts1" class="charts"> </div>
    </div>


    <div class="detalles" id="detalles">
    <p>ssssss</p>
    <p>ssssss</p>
    <p>ssssss</p>
    <p>ssssss</p>
    </div>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>




</body>

</html>