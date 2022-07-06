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
switch ($funcion) {
    case "nuevoActivo":
        $oactivoController->nuevoActivo();
        break;
    case "nuevoArea":
        $oactivoController->nuevaArea();
        break;
    case "eliminarArea":
        $oactivoController->eliminarArea();
        break;
    case "consultarAreaID":
        $oactivoController->consultarAreaID();
        break;
    case "editarArea":
        $oactivoController->editarArea();
        break;
    case "listarActivo":
        $oactivoController->listarActivo();
        break;
    case "listarClasificacion":
        $oactivoController->listarClasificacion();
        break;
    case "listarArea":
        $oactivoController->listarArea();
        break;
}

class activoController
{
    //La funcion constructor se ejecuta cuando se intancia los objetos, se utiliza para configurar los elementos basicos.
    public function __construct()
    {
    }

    public function nuevoActivo()
    {
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

    //Area

    public function nuevaArea()
    {
        require_once '../model/area.php';

        $oArea = new area();
        $oArea->area = $_GET['areaNombre'];
        $result = $oArea->crearArea();

        if ($result) {
            echo "Se agrego el area correctamente";
        } else {
            echo "Error al guardar";
        }
    }

    public function eliminarArea()
    {
        require_once '../model/area.php';

        $oArea = new area();
        $oArea->id_area = $_GET['id_area'];
        $result = $oArea->eliminarArea();

        if ($result) {
            echo "Se elimino el area correctamente";
        } else {
            echo "Error al eliminar";
        }
    }

    public function consultarAreaID()
    {
        require_once '../model/area.php';

        $oArea = new area();
        $result = $oArea->consultarArea($_GET['id_area']);
        echo json_encode($result);
    }

    public function editarArea()
    {
        require_once '../model/area.php';

        $oArea = new area();
        $oArea->id_area = $_GET['id_area'];
        $oArea->area = $_GET['areaNombre'];
        $result = $oArea->editarArea();


        if ($result) {
            echo "Se actualizo el area correctamente";
        } else {
            echo "Error al actualizar";
        }
    }

    public function listarActivo()
    {
        require_once '../model/activo.php';

        $oActivo = new activo();
        $paginacion = $oActivo->paginacionActivo($_GET['formato'], $_GET['clasificacion']);
        echo $paginacion;
        $delimitador = "®";
        echo $delimitador;
        $datos = $oActivo->activo($_GET['formato'], $_GET['clasificacion'], $_GET['pagina']);
        echo json_encode($datos);
    }

    public function listarClasificacion()
    {
        require_once '../model/activo.php';

        $oActivo = new activo();
        $paginacion = $oActivo->paginacionClasificacion($_GET['clasificacion']);
        echo $paginacion;
        $delimitador = "®";
        echo $delimitador;
        $datos = $oActivo->clasificacion($_GET['clasificacion'], $_GET['pagina']);
        echo json_encode($datos);
    }

    public function listarArea()
    {
        require_once '../model/activo.php';

        $oActivo = new activo();
        $paginacion = $oActivo->paginacionArea($_GET['clasificacion']);
        echo $paginacion;
        $delimitador = "®";
        echo $delimitador;
        $datos = $oActivo->area($_GET['clasificacion'], $_GET['pagina']);
        echo json_encode($datos);
    }
}
