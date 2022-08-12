<?php
require_once 'header.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link rel="stylesheet" href="/informacion_activos/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/informacion_activos/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/informacion_activos/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->
    <title>Informacion</title>
</head>

<body>
    <div id="container" class="container" style="margin-top: 30px;">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <label>Buscar por formato</label>
                        <div class="input-group m-b-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>

                            <select class="form-control" id="formato" name="formato" onchange="consultar()">
                                <option value="" selected>Seleccionar Formato</option>
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
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label>Buscar por clasificacion</label>
                        <div class="input-group m-b-0">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-search"></i></span>
                            </div>

                            <select class="form-control" id="clasificar" name="clasificar" onchange="consultar()">
                                <option value="" selected>Seleccionar Clasificacion</option>
                                <option value="DatosAbiertos">Datos Abiertos</option>
                                <option value="InformacionPublicoClasificado">Informacion Publico Clasificado</option>
                                <option value="InformacionPublicoReservado">Informacion Publico Reservado</option>
                            </select>
                        </div>
                    </div>
                </div>
                <br>
                <div class="card-tools">
                    <ul class="pagination pagination-sm contenedorUL" id="contenedorUL">

                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <!-- <div class="card-body">
                <table id="example1" class="table table-responsive p-0" style="height: 500px"> -->
            <div class="card-body">
                <table class="table table-responsive p-0" style="height: 1000px">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Area</th>
                            <th>Activo</th>
                            <th>Descripcion</th>
                            <th>Ultima Modificacion</th>
                            <th>Idioma</th>
                            <th>Medio Conservacion</th>
                            <th>Formato</th>
                            <th>Url</th>
                            <th>Propietario</th>
                            <th>Nivel Confidencialidad</th>
                            <th>Confidencialidad</th>
                            <th>Integridad</th>
                            <th>Disponibilidad</th>
                            <th>Valor</th>
                            <th>Nivel Tasacion</th>
                        </tr>
                    </thead>
                    <tbody id="listarActivo">

                    </tbody>
                </table>
            </div>
        </div>

        <footer class="footer_area">
            <div class="row">
                <div class="col-12">
                    <div class="single-footer-widget">
                        <div class="footer"></div>
                        <p>ESE RED DE SERVICIOS DE PRIMER NIVEL</p>
                    </div>
                </div>
            </div>
        </footer>
        <br>
    </div>

    <script src="../assets/js/js/informacion.js"></script>
    <script src="/informacion_activos/assets/plugins/jquery/jquery.min.js"></script>
    <!-- <script src="/informacion_activos/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/informacion_activos/assets/plugins/jszip/jszip.min.js"></script>
    <script src="/informacion_activos/assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="/informacion_activos/assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/informacion_activos/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["excel"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script> -->

    </div>

</body>

</html>