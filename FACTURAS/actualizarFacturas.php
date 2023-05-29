<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

require_once("config.php");
$data = new Config();

$id = $_GET['id'];
$data-> setId($id);
$rer = $data->seleccionar();
$vall = $rer[0];

if (isset($_POST["editar"])){
  $data->setId_empleado($_POST["id_empleado"]);
  $data->setId_cliente($_POST["id_cliente"]);
  $data->setFecha($_POST['fecha']);

  $data-> update();
  echo "<script>alert('Factura actualizada satisfactoriamente'); document.location='facturas.php'</script>";
}


?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Actualizar Factura</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/actualizar.css">

</head>

<body>
    <h1 class="m-2">Editar Factura</h1>
    <div id="contenido">
      <form class="col d-flex flex-wrap" action=""  method="post">
              <div class="mb-1 col-12">
                <label for="id_empleado" class="form-label">Empleado</label>
                <select name="id_empleado" id="id_empleado" class="form-select" value ="<?php echo $vall['id_empleado'];?>">
                    <option value="nothing">Seleccione el empleado</option>
                  </select>  
              </div>

              <div class="mb-1 col-12">
                <label for="id_cliente" class="form-label">Cliente</label>
                <select name="id_cliente" id="id_cliente" class="form-select" value ="<?php echo $vall['id_cliente'];?>">
                    <option value="nothing">Seleccione el cliente</option>
                  </select> 
              </div>
              <div class="mb-1 col-12">
                <label for="fecha" class="form-label">Fecha</label>
                <input 
                  type="text"
                  id="fecha"
                  name="fecha"
                  class="form-control"  
                  value ="<?php echo $vall['fecha'];?>"
                />
              </div>
                 <div class=" col-12 m-2">
                <input type="submit" class="btn btn-success" value="Guardar Cambios" name="editar"/>
                <button class="btn btn-light"><a href="facturas.php">Volver</a></button>
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