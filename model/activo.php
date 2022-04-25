<?php
require_once 'conexiondb.php';

class activo{
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

    function crearActivo(){
        //instancia la clase conectar
        $oConexion = new conectar();
        //se establece la conexión con la base datos
        $conexion = $oConexion->conexion();

        //sentencia para insertar un nuevo activo.
        $sql = "INSERT INTO formato (id_clasificacion, id_area, fecha, activo, descripcion_activo, idioma, conservacion, formato, informacion_publica, propietario_activo, nivel_confidencialidad, confidelidad, integridad, disponibilidad, valor, nivel_tasacion, eliminado)
        VALUES ($this->id_clasificacion, $this->id_area, '$this->fecha','$this->activo','$this->descripcion_activo','$this->idioma','$this->conservacion','$this->formato','$this->url','$this->propietario','$this->nivel_confidencialidad',$this->confidencialidad,$this->integridad,$this->disponibilidad, $this->valor, '$this->nivel_tasacion', false)";

        //se ejecuta la consulta en la base de datos
        $result = mysqli_query($conexion, $sql);
        return $result;
    }


}
