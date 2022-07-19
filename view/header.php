<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/informacion_activos/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/informacion_activos/assets/css/ionicons.min.css">
    <link rel="stylesheet" href="../assets/plugins/bs-stepper/css/bs-stepper.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">

    <link rel="shortcut icon" href="/informacion_activos/image/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/informacion_activos/assets/css/css/header.css" type="text/css">
    <link rel="stylesheet" href="/informacion_activos/assets/css/css/bulma.css" type="text/css">
    <link rel="stylesheet" href="/informacion_activos/assets/css/css/footer.css" type="text/css">
    <title>Activos de informacion</title>
</head>

<body>
    <div class="container">
        <div class="profile">
            <div class="profile-header">
                <div class="profile-header-cover"></div>
                <div class="profile-header-content">
                    <div class="profile-header-img">
                        <img src="/informacion_activos/image/logo.jpg" alt="" />
                    </div>
                    <ul class="profile-header-tab nav">
                        <li class="nav-item">
                            <a href="/informacion_activos/view/paginaprincipal.php" class="nav-link">
                                <div class="nav-field">Inicio</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/informacion_activos/view/informacion.php" class="nav-link">
                                <div class="nav-field">Activos de informacion</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/informacion_activos/view/area.php" class="nav-link">
                                <div class="nav-field">Area</div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/informacion_activos/view/categoria.php" class="nav-link">
                                <div class="nav-field">Categoria</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    


    <script src="/informacion_activos/assets/plugins/jquery/jquery.min.js"></script>
    <script src="/informacion_activos/assets/js/bootstrap.min.js"></script>
    <script src="/informacion_activos/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="/anyeale_proyecto/stylushanyeale_alejandra/assets/js/anyealejs/mensajecontroller.min.js"></script>
    <script>
        <?php
        require_once '../controller/mensajecontroller.php';

        if (isset($_GET['mensaje'])) {
            $oMensaje = new mensajes();
            echo $oMensaje->mensaje($_GET['tipoMensaje'], $_GET['mensaje']);
        }
        ?>
    </script>
</body>

</html>