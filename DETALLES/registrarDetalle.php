<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (isset($_POST['guardar'])){
    require_once("config.php");

    $config = new Config();

    $config-> setId_factura($_POST['id_factura']);
    $config-> setId_producto($_POST['id_producto']);
    $config-> setCantidad($_POST['cantidad']);
    $config-> setPrecio($_POST['precio']);
    $config-> insertDatos();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente');document.location='detalles.php'</script>"; 
}

?>