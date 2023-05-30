<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (isset($_POST['guardar'])){
    require_once("config.php");

    $config = new Config();

    $config-> setNombreCategoria($_POST['nombreCategoria']);
    $config-> setDescripcion($_POST['descripcion']);
    $config-> setImagen($_POST['imagen']);
    $config-> insertDatos();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente');document.location='categorias.php'</script>"; 
}

?>