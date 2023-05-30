<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (isset($_POST['guardar'])){
    require_once("config.php");

    $config = new Config();

    $config-> setNombreProveedor($_POST['nombreProveedor']);
    $config-> setTelefono($_POST['telefono']);
    $config-> setCiudad($_POST['ciudad']);
    $config-> insertDatos();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente');document.location='proveedores.php'</script>"; 
}

?>