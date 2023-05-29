<?php

ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);

require_once("db.php");

class Config {
    private $id;
    private $id_empleado;
    private $id_cliente;
    private $fecha;
    protected $dbPDO;

    public function __construct($id = 0, $id_empleado = "", $id_cliente = "", $fecha = ""){
        $this->id = $id;
        $this->id_empleado = $id_empleado;
        $this->id_cliente = $id_cliente;
        $this->fecha = $fecha;
        $this->dbPDO = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getId(){
        return $this->id;
    }

    public function setId_empleado($id_empleado){
        $this->id_empleado = $id_empleado;
    }

    public function getId_empleado(){
        return $this->id_empleado;
    }

    public function setId_cliente($id_cliente){
        $this->id_cliente = $id_cliente;
    }

    public function getId_cliente(){
        return $this->id_cliente;
    }

    public function setFecha($fecha){
        $this->fecha = $fecha;
    }

    public function getFecha(){
        return $this->fecha;
    }

    public function insertDatos(){
        try {
            $stm = $this-> dbPDO -> prepare("INSERT INTO facturas (id_empleado, id_cliente, fecha) values(?,?,?)");
            $stm -> execute([$this->id_empleado, $this->id_cliente, $this->fecha]);
        } catch (Exception $e) {
            return var_dump($e->getMessage());
        }
    }

    public function obtener(){
        try {
            $stm = $this->dbPDO->prepare("SELECT * FROM facturas");
            $stm -> execute();
            return $stm -> fetchAll(); // Método para obtener los registros PDO
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function delete(){
        try {
            $stm = $this->dbPDO->prepare("DELETE FROM facturas WHERE id = ?");
            $stm -> execute([$this->id]);
            return $stm-> fetchAll();
            echo "<script>alert('Factura eliminada'); document.location='facturas.php'</script>";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function seleccionar(){
        try {
            $stm = $this->dbPDO->prepare("SELECT * FROM facturas WHERE id = ?");
            $stm -> execute([$this->id]);
            return $stm-> fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function update(){
        try {
            $stm = $this->dbPDO->prepare("UPDATE facturas SET id_empleado = ?, id_cliente = ?, fecha = ? WHERE id = ?");
            $stm -> execute([$this->id_empleado,$this->id_cliente, $this->fecha, $this->id]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
?>