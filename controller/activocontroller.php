<?php
//funciones nesesarias para alimentar la vistas y modelo.

$funcion = ""; //Permite saber si la variable esta vacia.
//El if diferenciar metodo POST o GET o ninguno.
if (isset($_POST['funcion'])) { //Si esta definifa y su valor es diferente a NULO(ISSET), almacena la variable funcion.
    $funcion = $_POST['funcion'];
} else {
    if (isset($_GET['funcion'])) {
        $funcion = $_GET['funcion'];
    }
}

$oactivoController = new activoController();
switch($funcion){
    case "nuevoActivo":
        $oactivoController->nuevoActivo();
        break;

}

class activoController
{
    //La funcion constructor se ejecuta cuando se intancia los objetos, se utiliza para configurar los elementos basicos.
    public function __construct()
    {
    }

    public function nuevoActivo(){
        require_once '../model/activo.php';

        $oactivo = new activo();
        // $oCargo->idServicio = $_GET['idServicio'];
        $oactivo->id_clasificacion = $_GET['numero']; 
        $oactivo->id_area = $_GET['id_area']; 	
        $oactivo->fecha = $_GET['fecha']; 	
        $oactivo->activo = $_GET['activoNombre']; 	
        $oactivo->descripcion_activo = $_GET['descripcionActivo']; 	
        $oactivo->fecha_modificacion = $_GET['fechaModificacion']; 	
        $oactivo->idioma = $_GET['idiomas']; 	
        $oactivo->formato = $_GET['formato']; 	
        $oactivo->conservacion = $_GET['conservacion']; 	
        $oactivo->url = $_GET['url']; 	
        $oactivo->propietario = $_GET['propietario']; 	
        $oactivo->nivel_confidencialidad = $_GET['nivelConfidencialidad']; 
        $oactivo->confidencialidad = $_GET['confidencialidad']; 
        $oactivo->integridad = $_GET['integridad']; 
        $oactivo->disponibilidad = $_GET['disponibilidad']; 
        $oactivo->valor = $_GET['valor']; 
        $oactivo->nivel_tasacion = $_GET['nivelTasacion']; 
        $result = $oactivo->crearActivo();

        if ($result) {
           echo "Se guardo correctamente";
        } else {
            echo "error al guardar";
        }

    }
}
?>