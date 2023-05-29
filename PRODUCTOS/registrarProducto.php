<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (isset($_POST['guardar'])){
    require_once("config.php");

    $config = new Config();

    $config-> setId_categoria($_POST['id_categoria']);
    $config-> setPrecio($_POST['precio']);
    $config-> setStock($_POST['stock']);
    $config-> setUnidades($_POST['unidades']);
    $config-> setId_proveedor($_POST['id_proveedor']);
    $config-> setNombre($_POST['nombre']);
    $config-> setDescontinuado($_POST['descontinuado']);
    $config-> insertDatos();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente');document.location='productos.php'</script>"; 
}

?>