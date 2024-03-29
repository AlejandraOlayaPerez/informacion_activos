<?php
require_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/informacion_activos/assets/css/css/area.css" type="text/css">
    <link rel="stylesheet" href="/informacion_activos/assets/css/css/areaModal.css" type="text/css">
    <title>Area</title>
</head>

<body>

    <div id="container" class="container" style="margin-top: 30px;">

        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-area"><i class="fas fa-plus-square"></i> Agregar Area</button>
        <br>
        <div class="row">
            <?php
            require_once '../model/area.php';
            $oArea = new area();
            $result = $oArea->selectArea();
            foreach ($result as $registro) {
            ?>

                <?php
                if ($registro['area'] == "") {
                ?>
                    <h1>NO HAY AREAS CREADAS</h1>
                <?php } ?>

                <div class="col col-xl-4 col-md-6 col-12">
                    <div class="Caja">

                        <h1 class="titulo"><?php echo $registro['area']; ?></h1>

                        <div class="footer">
                            <a href="areaClasificacion.php?area=<?php echo $registro['id_area']; ?>" class="btn btn-info"> <i class="fas fa-eye"></i> Ver.</a>
                            <!-- data-id="<?php //echo $registro['id_area']; 
                                            ?> -->
                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-editar-area" onclick="ajaxEditarArea(<?php echo $registro['id_area']; ?>, '<?php echo $registro['area']; ?>' )"><i class="fas fa-edit"></i> Editar</a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarArea" onclick="eliminarArea(<?php echo $registro['id_area']; ?>)"><i class="fas fa-trash-alt"></i> Eliminar</a>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>

        </div>
        <br>
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
    <!-- <script src="../assets/js/js/areaE.js"></script> -->
    <script src="../assets/js/js/eliminar.js"></script>
    <script src="../assets/js/js/validaciones.js"></script>
    <script>
        function ajaxEditarArea(id_area, area) {
            document.getElementById("id_area").value = id_area;
            document.getElementById("editarArea").value = area;
        }
    </script>
    <script>
        function validarPaginaFinal() {
            // evento.preventDefault();
            var valido = true;
            // agregar el id de cada campo de la página para poder validar
            var campos = ["areaNombre"];
            campos.forEach(element => {
                var campo = document.getElementById(element);
                if (!validarCampo(campo))
                    valido = false;
            });
            if (valido)
                document.getElementById('formulario').submit();
        }

        function validarEditar() {
            // evento.preventDefault();
            var valido = true;
            // agregar el id de cada campo de la página para poder validar
            var campos = ["editarArea"];
            campos.forEach(element => {
                var campo = document.getElementById(element);
                if (!validarCampo(campo))
                    valido = false;
            });
            if (valido)
                document.getElementById('formulario2').submit();
        }
    </script>
</body>

</html>


<!--MODAL PARA AGREGAR AREA-->
<div class="modal fade" id="modal-area">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Agregar Area</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body1">
                <form action="../controller/activocontroller.php" method="GET" id="formulario" class="formulario">

                    <div class="col-12">
                        <label>Nombre Area<span class="text-danger">*</span></label>
                        <input type="text" name="funcion" value="nuevoArea" style="display:none">
                        <input type="text" class="form-control" id="areaNombre" name="areaNombre" minlength="1" maxlength="100" required>
                        <span id="areaNombreSpan"></span>
                    </div>
            </div>

            <div class="modal-footer">
                <button style="margin: 5px;" class="btn btn-success" type="button" onclick="validarPaginaFinal();"><i class="fas fa-save"></i> Guardar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-dismiss="modal"> Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL PARA EDITAR AREA-->
<div class="modal fade" id="modal-editar-area">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Editar Area</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body1">
                <form action="../controller/activocontroller.php" method="GET" id="formulario2" class="formulario">
                    <div class="col-12" id="conArea">
                        <label>Nombre Area<span class="text-danger">*</span></label>
                        <input type="text" name="funcion" value="actualizarArea" style="display:none">
                        <input type="text" name="id_area" id="id_area" style="display:none">
                        <input type="text" class="form-control" id="editarArea" name="areaNombre" minlength="1" maxlength="100" required>
                        <span id="editarAreaSpan"></span>
                    </div>
            </div>

            <div class="modal-footer">
                <button style="margin: 5px;" class="btn btn-success" type="button" onclick="validarEditar();"><i class="fas fa-save"></i> Guardar</button>
                </form>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL PARA ELIMINAR AREA-->
<div class="modal fade" id="eliminarArea" tabindex="-1" aria-labelledby="Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Eliminar Area</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="text">¿Esta seguro que desea eliminar esta area?</p>
            </div>
            <div class="modal-footer">
                <form action="../controller/activoController.php" method="GET">
                    <input type="text" name="id_area" id="areaEliminar" style="display: none;">
                    <button type="submit" class="btn btn-danger" name="funcion" value="eliminarArea"><i class="fas fa-trash-alt"></i> Eliminar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cancelar</button>
                </form>
            </div>
        </div>
    </div>
</div>