<?php
require_once 'header.php';

$activo = $_GET['activo'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/informacion_activos/assets/css/css/tablaAct.css" type="text/css">
    <title>Informacion</title>
</head>

<body>
    <div id="container" class="container" style="margin-top: 30px;">
        <input type="text" id="activoFuncion" value="<?php echo $activo; ?>" style="display: none;">
        <div class="card">
            <div class="modal-header">
                <?php
                if ($activo == "editar") {
                ?>
                    <h1 class="activo">Editar Activo</h1>
                <?php
                } else {
                ?>
                    <h1 class="activo">Eliminar Activo</h1>
                <?php
                }
                ?>
                <br>
                <div class="card-tools">
                    <ul class="pagination pagination-sm contenedorUL" id="contenedorUL">

                    </ul>
                </div>
            </div>
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
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="listarActivo">

                    </tbody>
                </table>
            </div>
        </div>
        <a style="margin: 5px;" href="paginaprincipal.php" class="btn btn-dark"> Atras</a>

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

    <script src="/informacion_activos/assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/js/js/eliminar.js"></script>
    <script src="../assets/js/js/tablaAct.js"></script>

    <!-- Modal -->
    <div class="modal fade" id="eliminarFormulario3" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Label">Eliminar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>¿Esta seguro que desea eliminar el activo de informacion?</p>
                </div>
                <div class="modal-footer">
                    <form action="../controller/activocontroller.php" method="GET">
                        <input type="text" name="idFormato" id="activoListar" style="display: none;">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-danger" name="funcion" value="eliminarFormato"><i class="fas fa-trash-alt"></i> Eliminar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>