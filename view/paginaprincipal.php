<?php require_once 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/informacion_activos/assets/css/css/inicio.css" type="text/css">
    <title>Inicio</title>
</head>

<body>
    <div class="container bootstrap snippets bootdey">
        <section id="content" class="current">
            <div class="container text-center">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <h2 style="font-size: 60px;line-height: 60px;margin-bottom: 20px;font-weight: 900;">Activos de informacion</h2>
                        <p>Los activos son los recursos necesarios para que la empresa funciones y consiga los objetivos que se ha propuesto la alta dirección.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="features-list">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                
                                    <div class="feature-block bootdey" style="visibility: visible;">
                                        <div class="ico fas fa-plus-square"></div>
                                        <div class="name">
                                            Crear Activo de informacion
                                        </div>
                                        <div class="text">Se deben identificar todos los activos de la compañía, crear un inventario de estos para tener los datos en un solo lugar y de manera organizada.</div>
                                        <div class="more">
                                            <a href="/informacion_activos/view/activoinformacion.php" class="btn btn-dark">Crear activo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="feature-block bootdey" style="visibility: visible;">
                                        <div class="ico fas fa-edit"></div>
                                        <div class="name">
                                            Modificar Activo de informacion
                                        </div>
                                        <div class="text">En caso de equivocacion en el activo, modificar el inventario de estos para tener los datos en un solo lugar y de manera organizada.</div>
                                        <div class="more">
                                            <a href="/informacion_activos/view/tablaAct.php?activo=editar" class="btn btn-dark">Modificar activo</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="feature-block bootdey" style="visibility: visible;">
                                        <div class="ico fas fa-trash-alt"></div>
                                        <div class="name">
                                            Eliminar Activo de informacion
                                        </div>
                                        <div class="text">En caso de equivocacion en el activo, eliminar el inventario de estos para tener los datos en un solo lugar y de manera organizada.</div>
                                        <div class="more">
                                            <a href="/informacion_activos/view/tablaAct.php?activo=eliminar" class="btn btn-dark">Eliminar activo</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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