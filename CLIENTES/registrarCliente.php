<?php 

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

if (isset($_POST['guardar'])){
    require_once("config.php");

    $config = new Config();

    $config-> setNombreCliente($_POST['nombreCliente']);
    $config-> setCelular($_POST['celular']);
    $config-> setCompañia($_POST['compañia']);
    $config-> insertDatos();

    echo "<script> alert('Los datos fueron guardados satisfactoriamente');document.location='clientes.php'</script>"; 
}

?>