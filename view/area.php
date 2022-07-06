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
    <title>Area</title>
</head>

<body>

    <div id="container" class="container" style="margin-top: 30px;">

        <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#modal-area">Agregar Empresa</button>
        <br>
        <div class="row">
            <?php
            require_once '../model/area.php';
            $oArea = new area();
            $result = $oArea->selectArea();
            foreach ($result as $registro) {
            ?>
                <div class="col col-xl-4 col-md-6 col-12">
                    <div class="Caja">

                        <h1 class="titulo"><?php echo $registro['area']; ?></h1>

                        <div class="footer">
                            <a href="areaClasificacion.php?area=<?php echo $registro['id_area']; ?>" class="btn btn-info">Ver Lista</a>
                            <!-- data-id="<?php //echo $registro['id_area']; 
                                            ?> -->
                            <a class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-editar-area" onclick="ajaxEditarArea(<?php echo $registro['id_area']; ?>)">Editar</a>
                            <a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarArea" onclick="eliminarArea(<?php echo $registro['id_area']; ?>)"> Eliminar</a>
                        </div>

                    </div>
                </div>
            <?php
            }
            ?>

        </div>
    </div>


    <script src="/informacion_activos/assets/plugins/jquery/jquery.min.js"></script>
    <script src="../assets/js/js/eliminar.js"></script>
    <script src="../assets/js/js/validaciones.js"></script>
    <script>
        function ajaxEditarArea(id_area) {
            document.getElementById("id").value = id_area;

            $.ajax({
                url: '../controller/activocontroller.php',
                type: 'GET',
                data: {
                    id_area: id_area,
                    funcion: "consultarAreaID"
                }
            }).done(function(data) {
                document.getElementById("editarArea").innerHTML = data['area'];




            })
        }

        function areaEditar(a) {


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
            <div class="modal-body">
                <form action="../controller/activocontroller.php" method="GET" id="formulario">

                    <div class="col-12">
                        <label>Nombre Area<span class="text-danger">*</span></label>
                        <input type="text" name="funcion" value="nuevoArea" style="display:none">
                        <input type="text" class="form-control" id="areaNombre" name="areaNombre" minlength="1" maxlength="100" required>
                        <span id="areaNombreSpan"></span>
                    </div>
            </div>

            <div class="modal-footer">
                <button style="margin: 5px;" class="btn btn-success" type="button" onclick="validarPaginaFinal();"></i> Guardar</button>
                </form>
                <button type="button" class="btn btn-info" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<!--MODAL PARA EDITAR AREA-->
<div class="modal fade" id="modal-editar-area">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Label">Editar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="../controller/activocontroller.php" method="GET" id="formulario2">
                    <div class="col-12">
                        <label>Nombre Area<span class="text-danger">*</span></label>
                        <input type="text" name="funcion" value="editarArea" style="display:none">
                        <input type="text" name="id_area" id="id" style="display:none">
                        <input type="text" class="form-control" id="editarArea" name="areaNombre" minlength="1" maxlength="100" required>
                        <span id="editarAreaSpan"></span>
                    </div>
            </div>

            <div class="modal-footer">
                <button style="margin: 5px;" class="btn btn-success" type="button" onclick="validarEditar();"></i> Guardar</button>
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
                <h5 class="modal-title" id="Label">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>¿Esta seguro que desea eliminar esta area?</p>
            </div>
            <div class="modal-footer">
                <form action="../controller/activoController.php" method="GET">
                    <input type="text" name="id_area" id="areaEliminar" style="display: none;">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cancelar</button>
                    <button type="submit" class="btn btn-danger" name="funcion" value="eliminarArea"> Eliminar</button>
                </form>
            </div>
        </div>
    </div>
</div>