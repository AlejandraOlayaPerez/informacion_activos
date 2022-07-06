<?php
require_once 'header.php';

$area = $_GET['area'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Area</title>
</head>

<body>

    <div id="container" class="container" style="margin-top: 30px;">
        <div class="card">
            <div class="card-header">
                <br>
                <div class="card-tools">
                    <ul class="pagination pagination-sm contenedorUL" id="contenedorUL">

                    </ul>
                </div>
            </div>
            <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
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
                    <tbody id="listarAreaClasificacion">
                        <input type="text" id="areaClasificacion" value="<?php echo $area ?>" style="display: none;">

                    </tbody>
                </table>
            </div>
        </div>
        <a href="../view/area.php" class="btn btn-dark"><i class="fas fa-arrow-circle-left"></i> Atras</a>
    </div>
    <script src="../assets/js/js/area.js"></script>
    <script>
        consultar();
    </script>
</body>

</html>