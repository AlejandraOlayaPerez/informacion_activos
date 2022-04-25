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
    <title>Crear Activo.</title>
</head>

<body>
    <div id="container" class="container" style="margin-top: 30px;">
        <form action="../controller/activocontroller.php" method="GET" id="formulario">
            <input type="text" name="funcion" value="nuevoActivo" style="display: none;">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        <div class="card-header">
                            <h3 class="card-title">Activo Informacion</h3>
                        </div>

                        <div class="card-body p-0">
                            <div class="bs-stepper">
                                <div class="bs-stepper-header" role="tablist">
                                    <div class="step" data-target="#activo-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="activo-part" id="activo-part-trigger">
                                            <span class="bs-stepper-circle">1</span>
                                            <span class="bs-stepper-label">Informacion Activo</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#descripcion-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="descripcion-part" id="descripcion-part-trigger">
                                            <span class="bs-stepper-circle">2</span>
                                            <span class="bs-stepper-label">Descripcion Activo</span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#clasificacion-part">
                                        <button type="button" class="step-trigger" role="tab" aria-controls="clasificacion-part" id="clasificacion-part-trigger">
                                            <span class="bs-stepper-circle">3</span>
                                            <span class="bs-stepper-label">Clasificacion Activo</span>
                                        </button>
                                    </div>
                                </div>
                                <!-- // -->
                                <div class="bs-stepper-content">
                                    <div id="activo-part" class="content" role="tabpanel" aria-labelledby="activo-part-trigger">
                                        <div class="row">
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>#</label>
                                                <input type="number" class="form-control" id="numero" name="numero" min="1" max="500" required>
                                                <span id="numeroSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Area Encargada<span class="text-danger">*</span></label>
                                                <?php
                                                require_once '../model/area.php';
                                                $oArea = new area();
                                                $result = $oArea->selectArea();
                                                ?>
                                                <select select class="form-select" id="id_area" name="id_area" value="<?php echo $oArea->area; ?>" required>
                                                    <option value="" disabled selected>Selecciones una opción</option>
                                                    <?php foreach ($result as $registro) {
                                                    ?>
                                                        <option value="<?php echo $registro['id_area']; ?>"><?php echo $registro['area']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                                <span id="id_areaSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Fecha<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="fecha" name="fecha" value="<?php echo $fechaActual; ?>" readonly required>
                                                <span id="fechaSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Activo<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="activoNombre" name="activoNombre" minlength="1" maxlength="100" required>
                                                <span id="activoNombreSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Descripcion<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="descripcionActivo" name="descripcionActivo" minlength="1" maxlength="100" required>
                                                <span id="descripcionActivoSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Fecha de modificacion<span class="text-danger">*</span></label>
                                                <input type="Date" class="form-control" id="fechaModificacion" name="fechaModificacion" required>
                                                <span id="fechaModificacionSpan"></span>
                                            </div>
                                        </div>
                                        <br>
                                        <button style="margin: 5px;" class="btn btn-info float-right" type="button" onclick="validarPagina1();"></i> Siguiente</button>
                                        <a style="margin: 5px;" href="paginaprincipal.php" class="btn btn-dark"> Atras</a>
                                    </div>

                                    <div id="descripcion-part" class="content" role="tabpanel" aria-labelledby="descripcion-part-trigger">
                                        <div class="row">
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Idioma<span class="text-danger">*</span></label>
                                                <select class="form-control" id="idioma" name="idiomas" required>
                                                    <option value="" selected>Seleccionar</option>
                                                    <option value="Español">Español</option>
                                                    <option value="Ingles">Ingles</option>
                                                </select>
                                                <span id="idiomaSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Medio de conservacion<span class="text-danger">*</span></label>
                                                <select class="form-control" id="formato" name="formato" required>
                                                    <option value="" selected>Seleccionar</option>
                                                    <option value="Digital">Digital</option>
                                                    <option value="Fisico">Fisico</option>
                                                </select>
                                                <span id="formatoSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Formato<span class="text-danger">*</span></label>
                                                <select class="form-control" id="conservacion" name="conservacion" required>
                                                    <option value="" selected>Seleccionar</option>
                                                    <option value="documento">Documento</option>
                                                    <option value="documentoTXT">Documento TXT</option>
                                                    <option value="documentoPublisher">Documento Publisher</option>
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
                                                </select>
                                                <span id="conservacionSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Url<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="url" name="url" minlength="1" maxlength="10000" required>
                                                <span id="urlSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Propietario<span class="text-danger">*</span></label>
                                                <input type="Text" class="form-control" id="propietario" name="propietario" minlength="1" maxlength="100" required>
                                                <span id="propietarioSpan"></span>
                                            </div>
                                        </div>
                                        <br>
                                        <button style="margin: 5px;" class="btn btn-info float-right" type="button" onclick="validarPagina2();"></i> Siguiente</button>
                                        <button style="margin: 5px;" class="btn btn-info float-left" type="button" onclick="stepper.previous()">Anterior</button>
                                    </div>

                                    <div id="clasificacion-part" class="content" role="tabpanel" aria-labelledby="clasificacion-part-trigger">
                                        <div class="row">
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Nivel Confidencialidad<span class="text-danger">*</span></label>
                                                <select class="form-control" id="nivelConfidencialidad" name="nivelConfidencialidad" required>
                                                    <option value="" selected>Seleccionar</option>
                                                    <option value="DatosAbiertos">Datos Abiertos</option>
                                                    <option value="InformacionPublicoClasificado">Informacion Publico Clasificado</option>
                                                    <option value="InformacionPublicoReservado">Informacion Publico Reservado</option>
                                                </select>
                                                <span id="nivelConfidencialidadSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Confidencialidad<span class="text-danger">*</span></label>
                                                <select class="form-control" id="confidencialidad" name="confidencialidad" onclick="promedio()" required>
                                                    <option value="" selected>Seleccionar</option>
                                                    <option value="" selected>Seleccionar</option>
                                                    <option value="1">1 (Muy Bajo)</option>
                                                    <option value="2">2 (Bajo)</option>
                                                    <option value="3">3 (Medio)</option>
                                                    <option value="4">4 (Alto)</option>
                                                    <option value="5">5 (Muy Alto)</option>
                                                </select>
                                                <span id="confidencialidadSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Integridad<span class="text-danger">*</span></label>
                                                <select class="form-control" id="integridad" name="integridad" onclick="promedio()" ; required>
                                                    <option value="" selected>Seleccionar</option>
                                                    <option value="1">1 (Muy Bajo)</option>
                                                    <option value="2">2 (Bajo)</option>
                                                    <option value="3">3 (Medio)</option>
                                                    <option value="4">4 (Alto)</option>
                                                    <option value="5">5 (Muy Alto)</option>
                                                </select>
                                                <span id="integridadSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Disponibilidad<span class="text-danger">*</span></label>
                                                <select class="form-control" id="disponibilidad" name="disponibilidad" onclick="promedio()" required>
                                                    <option value="" selected>Seleccionar</option>
                                                    <option value="1">1 (Muy Bajo)</option>
                                                    <option value="2">2 (Bajo)</option>
                                                    <option value="3">3 (Medio)</option>
                                                    <option value="4">4 (Alto)</option>
                                                    <option value="5">5 (Muy Alto)</option>
                                                </select>
                                                <span id="disponibilidadSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Valor<span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" id="valor" name="valor" min="1" max="5" readonly required>
                                                <span id="valorSpan"></span>
                                            </div>
                                            <div class="col col-xl-4 col-md-6 col-12">
                                                <label>Nivel Tasacion<span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" id="nivelTasacion" name="nivelTasacion" minlength="1" maxlength="10" readonly required>
                                                <span id="nivelTasacionSpan"></span>
                                            </div>
                                        </div>
                                        <br>
                                        <button style="margin: 5px;" class="btn btn-info float-right" type="button" onclick="validarPaginaFinal();"></i> Guardar</button>
                                        <button style="margin: 5px;" class="btn btn-info float-left" type="button" onclick="stepper.previous()">Anterior</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>


    </div>
    <script src="../assets/js/js/validaciones.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.stepper = new Stepper(document.querySelector('.bs-stepper'))
        })
    </script>

    <script>
        function promedio() {
            var c = parseInt(document.getElementById("confidencialidad").value);
            var i = parseInt(document.getElementById("integridad").value);
            var d = parseInt(document.getElementById("disponibilidad").value);

            document.getElementById("valor").value = Math.trunc((c + i + d) / 3);
            niveltasacion();
        }
    </script>

    <script>
        function niveltasacion() {
            var valor = document.getElementById("valor").value;
            valor = parseInt(valor);

            switch (valor) {
                case 1:
                    document.getElementById("nivelTasacion").value = "Muy Bajo";
                    break;
                case 2:
                    document.getElementById("nivelTasacion").value = "Bajo";
                    break;
                case 3:
                    document.getElementById("nivelTasacion").value = "Medio";
                    break;
                case 4:
                    document.getElementById("nivelTasacion").value = "Alto";
                    break;
                case 5:
                    document.getElementById("nivelTasacion").value = "Muy Alto";
                    break;
            }

        }
    </script>

    <script>
        //crear una función con los campos de cada pagina
        function validarPagina1() {
            var valido = true;
            // agregar el id de cada campo de la página para poder validar
            var campos = ["numero", "id_area", "fecha", "activoNombre", "descripcionActivo", "fechaModificacion"];
            campos.forEach(element => {
                var campo = document.getElementById(element);
                if (!validarCampo(campo))
                    valido = false;
            });
            if (valido)
                stepper.next();
        }

        function validarPagina2() {
            var valido = true;
            // agregar el id de cada campo de la página para poder validar
            var campos = ["idioma", "conservacion", "formato", "url", "propietario"];
            campos.forEach(element => {
                var campo = document.getElementById(element);
                if (!validarCampo(campo))
                    valido = false;
            });
            if (valido)
                stepper.next();
        }

        function validarPaginaFinal() {
            // evento.preventDefault();
            var valido = true;
            // agregar el id de cada campo de la página para poder validar
            var campos = ["nivelConfidencialidad", "confidencialidad", "integridad", "disponibilidad", "valor", "nivelTasacion"];
            campos.forEach(element => {
                var campo = document.getElementById(element);
                if (!validarCampo(campo))
                    valido = false;
            });
            if (valido)
                document.getElementById('formulario').submit();
        }
    </script>
</body>

</html>