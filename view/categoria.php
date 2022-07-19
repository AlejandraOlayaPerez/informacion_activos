<?php
require_once 'header.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/informacion_activos/assets/css/css/categoria.css" type="text/css">
    <title>Categoria</title>
</head>

<body>
    <div class="container">

        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex flex-column flex-lg-row">
                    <span class="avatar avatar-text rounded-3 me-4 mb-2">DA</span>
                    <div class="row flex-fill">
                        <div class="col-sm-5">
                            <h4 class="h5">DATOS ABIERTOS</h4>
                            <span class="badge bg-secondary">Determinados datos estén disponibles, sin restricciones de derechos de autor</span>
                        </div>
                        <div class="col-sm-4 py-2"></div>
                        <div class="col-sm-3 text-lg-end">
                            <a href="../view/clasificacion.php?clasificacion=DatosAbiertos" class="btn btn-primary stretched-link">Ver.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex flex-column flex-lg-row">
                    <span class="avatar avatar-text rounded-3 me-4 bg-warning mb-2">IC</span>
                    <div class="row flex-fill">
                        <div class="col-sm-5">
                            <h4 class="h5">INFORMACION PUBLICA CLASIFICADA</h4>
                            <span class="badge bg-secondary">Pertenece al ámbito propio, privado o semiprivado de una persona natural o jurídica</span>
                        </div>
                        <div class="col-sm-4 py-2"></div>
                        <div class="col-sm-3 text-lg-end">
                            <a href="../view/clasificacion.php?clasificacion=InformacionPublicoClasificado" class="btn btn-primary stretched-link">Ver.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <div class="d-flex flex-column flex-lg-row">
                    <span class="avatar avatar-text rounded-3 me-4 bg-info mb-2">IR</span>
                    <div class="row flex-fill">
                        <div class="col-sm-5">
                            <h4 class="h5">INFORMACION PUBLICA RESERVADA</h4>
                            <span class="badge bg-secondary">El acceso a ella puede ocasionar daño a nivel publico</span>
                        </div>
                        <div class="col-sm-4 py-2"></div>
                        <div class="col-sm-3 text-lg-end">
                            <a href="../view/clasificacion.php?clasificacion=InformacionPublicoReservado" class="btn btn-primary stretched-link">Ver.</a>
                        </div>
                    </div>
                </div>
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
</body>

</html>