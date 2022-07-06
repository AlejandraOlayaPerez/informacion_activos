<?php
require_once 'conexiondb.php';

class activo
{
    //La funcion constructor se ejecuta cuando se intancia los objetos, se utiliza para configurar los elementos basicos.
    public function __construct()
    {
    }

    //atributos de la tabla formato.
    public $id_fomato = 0;
    public $id_clasificacion = "";
    public $id_area = "";
    public $fecha = "";
    public $activo = "";
    public $descripcion_activo = "";
    public $fecha_modificacion = "";
    public $idioma = "";
    public $conservacion = "";
    public $formato = "";
    public $informacion_publica = "";
    public $propietario_activo = "";
    public $nivel_confidencialidad = "";
    public $confidencialidad = "";
    public $integridad = "";
    public $disponibilidad = "";
    public $valor = "";
    public $nivel_tasacion = "";

    function crearActivo()
    {
        //instancia la clase conectar
        $oConexion = new conectar();
        //se establece la conexión con la base datos
        $conexion = $oConexion->conexion();

        //sentencia para insertar un nuevo activo.
        $sql = "INSERT INTO formato (id_area, fecha, activo, descripcion_activo, fecha_modificacion, idioma, conservacion, formato, informacion_publica, propietario_activo, nivel_confidencialidad, confidelidad, integridad, disponibilidad, valor, nivel_tasacion, eliminado)
        VALUES ($this->id_area, '$this->fecha','$this->activo','$this->descripcion_activo', '$this->fecha_modificacion', '$this->idioma','$this->conservacion','$this->formato','$this->url','$this->propietario','$this->nivel_confidencialidad',$this->confidencialidad,$this->integridad,$this->disponibilidad, $this->valor, '$this->nivel_tasacion', false)";

        //se ejecuta la consulta en la base de datos
        $result = mysqli_query($conexion, $sql);
        return $result;
    }

    function paginacionActivo($formato, $clasificacion)
    {
        //Instancia clase conectar
        $oConexion = new conectar();
        //Establece conexion con la base de datos.
        $conexion = $oConexion->conexion();

        $where = "1 ";
        if ($formato != "") {
            $where .= " AND conservacion='$formato' AND eliminado='false' ";
        }
        if ($clasificacion != "") {
            $where .= " AND nivel_confidencialidad='$clasificacion' AND eliminado='false' ";
        }

        $sql = "SELECT count(id_formato) as numRegistro FROM formato WHERE $where";

        $result = mysqli_query($conexion, $sql);
        // echo $sql;
        foreach ($result as $registro) {
            $this->numRegistro = $registro['numRegistro'];
        }
        return $this->numRegistro;
    }

    function activo($formato, $clasificacion, $pagina)
    {
        //se instancia el objeto conectar
        $oConexion = new conectar();
        //se establece conexión con la base datos
        $conexion = $oConexion->conexion();

        $where = "1 ";
        if ($formato != "") {
            $where .= " AND conservacion='$formato' AND eliminado='false' ";
        }
        if ($clasificacion != "") {
            $where .= " AND nivel_confidencialidad='$clasificacion' AND eliminado='false' ";
        }

        $inicio = (($pagina - 1) * 10);
        $sql = "SELECT * FROM formato WHERE $where LIMIT 10 OFFSET $inicio";

        //se ejecuta la consulta en la base de datos
        $result = mysqli_query($conexion, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        //echo $sql;
        return $result;
    }

    function consultarActivo($clasificacion){
        //se instancia el objeto conectar
        $oConexion = new conectar();
        //se establece conexión con la base de datos
        $conexion = $oConexion->conexion();
        //consulta para retornar un solo registro

        $sql = "SELECT * FROM formato WHERE nivel_confidencialidad='$clasificacion'";

        //se ejecuta la consulta
        $result = mysqli_query($conexion, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        
        foreach ($result as $registro) {
            //se registra la consulta en los parametros
            $this->id_formato = $registro['id_formato'];
            $this->id_area = $registro['id_area'];
            $this->fecha = $registro['fecha'];
            $this->activo = $registro['activo'];
            $this->descripcion_activo = $registro['descripcion_activo'];
            $this->fecha_modificacion = $registro['fecha_modificacion'];
            $this->idioma = $registro['idioma'];
            $this->conservacion = $registro['conservacion'];
            $this->formato = $registro['formato'];
            $this->informacion_publica = $registro['informacion_publica'];
            $this->propietario_activo = $registro['propietario_activo'];
            $this->nivel_confidencialidad = $registro['nivel_confidencialidad'];
            $this->confidencialidad = $registro['confidelidad'];
            $this->integridad = $registro['integridad'];
            $this->disponibilidad = $registro['disponibilidad'];
            $this->valor = $registro['valor'];
            $this->nivel_tasacion = $registro['nivel_tasacion'];
        }
    }

    function paginacionClasificacion($clasificacion)
    {
        //Instancia clase conectar
        $oConexion = new conectar();
        //Establece conexion con la base de datos.
        $conexion = $oConexion->conexion();

        $where = "1 ";
        if ($clasificacion != "") {
            $where .= " AND nivel_confidencialidad='$clasificacion' AND eliminado='false' ";
        }

        $sql = "SELECT count(id_formato) as numRegistro FROM formato WHERE $where";

        $result = mysqli_query($conexion, $sql);
        // echo $sql;
        foreach ($result as $registro) {
            $this->numRegistro = $registro['numRegistro'];
        }
        return $this->numRegistro;
    }

    function clasificacion($clasificacion, $pagina)
    {
        //se instancia el objeto conectar
        $oConexion = new conectar();
        //se establece conexión con la base datos
        $conexion = $oConexion->conexion();

        $where = "1 ";
        if ($clasificacion != "") {
            $where .= " AND nivel_confidencialidad='$clasificacion' AND eliminado='false' ";
        }

        $inicio = (($pagina - 1) * 10);
        $sql = "SELECT * FROM formato WHERE $where LIMIT 10 OFFSET $inicio";

        //se ejecuta la consulta en la base de datos
        $result = mysqli_query($conexion, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // echo $sql;
        return $result;
    }

    function paginacionArea($clasificacion)
    {
        //Instancia clase conectar
        $oConexion = new conectar();
        //Establece conexion con la base de datos.
        $conexion = $oConexion->conexion();

        $where = "1 ";
        if ($clasificacion != "") {
            $where .= " AND id_area=$clasificacion AND eliminado='false' ";
        }

        $sql = "SELECT count(id_formato) as numRegistro FROM formato WHERE $where";

        $result = mysqli_query($conexion, $sql);
        // echo $sql;
        foreach ($result as $registro) {
            $this->numRegistro = $registro['numRegistro'];
        }
        return $this->numRegistro;
    }

    function area($clasificacion, $pagina)
    {
        //se instancia el objeto conectar
        $oConexion = new conectar();
        //se establece conexión con la base datos
        $conexion = $oConexion->conexion();

        $where = "1 ";
        if ($clasificacion != "") {
            $where .= " AND id_area=$clasificacion AND eliminado='false' ";
        }

        $inicio = (($pagina - 1) * 10);
        $sql = "SELECT * FROM formato WHERE $where LIMIT 10 OFFSET $inicio";

        //se ejecuta la consulta en la base de datos
        $result = mysqli_query($conexion, $sql);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // echo $sql;
        return $result;
    }
}
