<?php
include('session.php');
if (!isset($_SESSION['login_user'])) {

    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bienvenido : <?php echo $login_session; ?></title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="js/main.js"></script>

</head>

<body>

    <div class="d-flex" id="wrapper">

        <!-- Barra izq -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading">Hotel ERP </div>
            <div class="list-group list-group-flush">
                <a href="#" class="list-group-item list-group-item-action bg-light">Clientes</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Plantas</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Reservas</a>
                <a href="#" class="list-group-item list-group-item-action bg-light">Soporte</a>
            </div>
        </div>


        <!-- pagina -->
        <div id="page-content-wrapper">

            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-primary" id="menu-toggle">Menú</button>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Cerrar sesión</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Desplegable
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Cosas</a>
                                <a class="dropdown-item" href="#">Mas cosas</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">No se</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid">
                <h1 class="mt-4">Bienvenido : <?php echo $login_session; ?></h1>
            </div>
            <div class="limiter">
                <div class="container-table100">
                    <div class="wrap-table100">
                        <div class="table">

                            <div class="row header">
                                <div class="cell">
                                    Full Name
                                </div>
                                <div class="cell">
                                    Age
                                </div>
                                <div class="cell">
                                    Job Title
                                </div>
                                <div class="cell">
                                    Location
                                </div>
                            </div>

                            <div class="row">
                                <div class="cell" data-title="Full Name">
                                    Vincent Williamson
                                </div>
                                <div class="cell" data-title="Age">
                                    31
                                </div>
                                <div class="cell" data-title="Job Title">
                                    iOS Developer
                                </div>
                                <div class="cell" data-title="Location">
                                    Washington
                                </div>
                            </div>

                            <div class="row">
                                <div class="cell" data-title="Full Name">
                                    Joseph Smith
                                </div>
                                <div class="cell" data-title="Age">
                                    27
                                </div>
                                <div class="cell" data-title="Job Title">
                                    Project Manager
                                </div>
                                <div class="cell" data-title="Location">
                                    Somerville, MA
                                </div>
                            </div>

                            <div class="row">
                                <div class="cell" data-title="Full Name">
                                    Justin Black
                                </div>
                                <div class="cell" data-title="Age">
                                    26
                                </div>
                                <div class="cell" data-title="Job Title">
                                    Front-End Developer
                                </div>
                                <div class="cell" data-title="Location">
                                    Los Angeles
                                </div>
                            </div>

                            <div class="row">
                                <div class="cell" data-title="Full Name">
                                    Sean Guzman
                                </div>
                                <div class="cell" data-title="Age">
                                    25
                                </div>
                                <div class="cell" data-title="Job Title">
                                    Web Designer
                                </div>
                                <div class="cell" data-title="Location">
                                    San Francisco
                                </div>
                            </div>

                            <div class="row">
                                <div class="cell" data-title="Full Name">
                                    Keith Carter
                                </div>
                                <div class="cell" data-title="Age">
                                    20
                                </div>
                                <div class="cell" data-title="Job Title">
                                    Graphic Designer
                                </div>
                                <div class="cell" data-title="Location">
                                    New York, NY
                                </div>
                            </div>

                            <div class="row">
                                <div class="cell" data-title="Full Name">
                                    Joseph Smith
                                </div>
                                <div class="cell" data-title="Age">
                                    27
                                </div>
                                <div class="cell" data-title="Job Title">
                                    Project Manager
                                </div>
                                <div class="cell" data-title="Location">
                                    Somerville, MA
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- movidas para la barra -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>

</body>

</html>