<?php
require_once 'conexiondb.php';

class area
{
    //La funcion constructor se ejecuta cuando se intancia los objetos, se utiliza para configurar los elementos basicos.
    public function __construct()
    {
    }

    //atributos de la tabla area.
    public $id_area = 0;
    public $area = "";
    public $eliminado = "";

    function selectArea()
    {
        //instancia la clase conectar
        $oConexion = new conectar();
        //se establece la conexión con la base datos
        $conexion = $oConexion->conexion();

        $sql = "SELECT * FROM area WHERE eliminado=false";

        //se ejecuta la consulta en la base de datos
        $result = mysqli_query($conexion, $sql);
        //organiza resultado de la consulta y lo retorna
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

    function contarActivoArea()
    {
        //instancia la clase conectar
        $oConexion = new conectar();
        //se establece la conexión con la base datos
        $conexion = $oConexion->conexion();
        //sentencia SQL para instertar estudiante

        $sql = "SELECT COUNT(id_area) AS activoArea FROM area WHERE eliminado=false";

        //se ejecuta la consulta en la base de datos
        $result = mysqli_query($conexion, $sql);
        //organiza resultado de la consulta y lo retorna
        return mysqli_fetch_all($result, MYSQLI_ASSOC);

        foreach ($result as $registro) {
            //se registra la consulta en los parametros
            $this->activoArea = $registro['activoArea'];
        }
    }

    function crearArea()
    {
        //instancia la clase conectar
        $oConexion = new conectar();
        //se establece la conexión con la base datos
        $conexion = $oConexion->conexion();

        //sentencia para insertar un nuevo activo.
        $sql = "INSERT INTO area (area)
        VALUES ('$this->area')";

        //se ejecuta la consulta en la base de datos
        $result = mysqli_query($conexion, $sql);
        return $result;
    }

    function eliminarArea()
    {
        //se instancia el objeto conectar
        $oConexion = new conectar();
        //se establece conexión con la base de datos
        $conexion = $oConexion->conexion();

        //consulta para eliminar el registro
        $sql = "UPDATE area SET eliminado=1 WHERE id_area=$this->id_area";

        //se ejecuta la consulta
        $result = mysqli_query($conexion, $sql);
        return $result;
    }

    function consultarArea($id_area)
    {
        //se instancia el objeto conectar
        $oConexion = new conectar();
        //se establece conexión con la base de datos
        $conexion = $oConexion->conexion();

        //consulta para retornar un solo registro
        $sql = "SELECT * FROM area WHERE id_area=$id_area AND eliminado=false";

        //se ejecuta la consulta
        $result = mysqli_query($conexion, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }

    function areaConsultar($area)
    {
        //se instancia el objeto conectar
        $oConexion = new conectar();
        //se establece conexión con la base de datos
        $conexion = $oConexion->conexion();

        //consulta para retornar un solo registro
        $sql = "SELECT * FROM area WHERE id_area=$area AND eliminado=false";

        //se ejecuta la consulta
        $result = mysqli_query($conexion, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($result as $registro) {
            //se registra la consulta en los parametros
            $this->id_area = $registro['id_area'];
            $this->area = $registro['area'];
        }
    }

    function editarArea()
    {
        //se instancia el objeto conectar
        $oConexion = new conectar();
        //se establece conexión con la base datos
        $conexion = $oConexion->conexion();

        //sentencia que permite actualizar un  empleado
        $sql = "UPDATE area SET area='$this->area'
          WHERE id_area=$this->id_area;";

        //se ejecuta la consulta
        $result = mysqli_query($conexion, $sql);
        return $result;
    }
}
