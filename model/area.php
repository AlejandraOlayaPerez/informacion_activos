<?php
require_once 'conexiondb.php';

class area{
    //La funcion constructor se ejecuta cuando se intancia los objetos, se utiliza para configurar los elementos basicos.
    public function __construct()
    {
    }

    //atributos de la tabla area.
    public $id_area = 0;
    public $area = "";
    public $eliminado = "";

    function selectArea(){
       //instancia la clase conectar
       $oConexion = new conectar();
       //se establece la conexión con la base datos
       $conexion = $oConexion->conexion();

       $sql = "SELECT * FROM area";

       //se ejecuta la consulta en la base de datos
       $result = mysqli_query($conexion, $sql);
       //organiza resultado de la consulta y lo retorna
       return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}

?>