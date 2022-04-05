<?php
require_once 'header.php';
date_default_timezone_set('America/Bogota');
$fechaActual = Date("Y-m-d");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>

<body>
    <div id="container" style="margin: 9%;">
        <form action="" method="GET">
            <div class="row">
                <div class="col-md-2">
                    <label>#</label>
                    <input type="number" class="form-control">
                </div>
                <div class="col-md-2">
                    <label>Fecha</label>
                    <input type="text" class="form-control" name="fechaActual" value="<?php echo $fechaActual; ?>" disabled>
                </div>
                <div class="col-md-2">
                    <label>Activo</label>
                    <input type="text" class="form-control" name="activoNombre">
                </div>
                <div class="col-md-2">
                    <label>Descripcion</label>
                    <input type="text" class="form-control" name="descripcionActivo">
                </div>
                <div class="col-md-3">
                    <label>Fecha de modificacion</label>
                    <input type="Date" class="form-control" name="fechaModificacion">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2">
                    <label>Idioma</label>
                    <select class="form-control" id="idioma" name="idiomas" required>
                        <option value="" selected>Seleccionar</option>
                        <option value="Español">Español</option>
                        <option value="Ingles">Ingles</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label>Medio de conservacion</label>
                    <select class="form-control" id="idioma" name="idiomas" required>
                        <option value="" selected>Seleccionar</option>
                        <option value="Digital">Digital</option>
                        <option value="Fisico">Fisico</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Formato</label>
                    <select class="form-control" id="conservacion" name="conservacion" required>
                        <option value="" selected>Seleccionar</option>
                        <option value="documento">Documento</option>
                        <option value="documentoTXT">Documento TXT</option>
                        <option value="documentoPDF">Documento PDF</option>
                        <option value="holadecalculo">Hoja de calculo</option>
                        <option value="presentacion">Presentacion</option>
                        <option value="basedatos">Base de datos</option>
                        <option value="imagen">Imagen</option>
                        <option value="audio">Audio</option>
                        <option value="video">Video</option>
                        <option value="animacion">Animacion</option>
                        <option value="archivoICS">Archivos ICS</option>
                        <option value="archivoSCV">Archivos SVC</option>
                        <option value="archivoRar">Archivos Rar</option>
                        <option value="web">Web</option>
                        <option value="correoElectronico">correo Electronico</option>
                        <option value="mensajeInstantanea">Mensaje Instantanea</option>
                        <option value="informacionSoftware">Informacion Software</option>
                        <option value="informacionHardware">Informacion Hardware</option>
                        <option value="Servicios">Servicios</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Url</label>
                    <input type="text" class="form-control" name="Url">
                </div>
                <div class="col-md-2">
                    <label>Propietario</label>
                    <input type="Text" class="form-control" name="propietario">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-3">
                    <label>Nivel Confidencialidad</label>
                    <select class="form-control" id="nivelConfidencialidad" name="idiomas" required>
                        <option value="" selected>Seleccionar</option>
                        <option value="DatosAbiertos">Datos Abiertos</option>
                        <option value="InformacionPublicoClasificado">Informacion Publico Clasificado</option>
                        <option value="InformacionPublicoReservado">Informacion Publico Reservado</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Confidencialidad</label>
                    <select class="form-control" id="idioma" name="idiomas" required>
                        <option value="" selected>Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Integridad</label>
                    <select class="form-control" id="idioma" name="idiomas" required>
                        <option value="" selected>Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Disponibilidad</label>
                    <select class="form-control" id="idioma" name="idiomas" required>
                        <option value="" selected>Seleccionar</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <label>Nivel Tasacion</label>
                    <input type="text" class="form-control" name="nivelTasacion">
                </div>
            </div>
        </form>
    </div>


</body>

</html>