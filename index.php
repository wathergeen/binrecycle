<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/copycb.js"></script>
    <script src="assets/js/teste.js"></script>
    <script>
        $(window).on("load", function() {
            $(".loader-wrapper").fadeOut("slow");
        });
    </script>
    <style>
        a,
        a.sair,
        a:link,
        a:visited,
        a:focus,
        a:hover,
        a:active {
            color: inherit;
            text-decoration: none;
        }
    </style>
</head>

<body id="page-top">
    <div class="loader-wrapper">
        <div class="multi-spinner-container">
            <div class="multi-spinner">
                <div class="multi-spinner">
                    <div class="multi-spinner">
                        <div class="multi-spinner">
                            <div class="multi-spinner">
                                <div class="multi-spinner"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper">
        <ul class="navbar-nav sidebar sidebar-bin text-white sidebar-dark" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center my-4" href="?page=">
                <div class="sidebar-brand-icon fa-rotate-n-15">
                    <img src="reduce.svg" alt="logo" width="60px">
                </div>
                <div class="sidebar-brand-text mx-3">Bin Recycle <sup>V1.0</sup></div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="?page=">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Boas Vindas</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Painéis
            </div>
            <li class="nav-item">
                <a class="nav-link" href="?page=form">
                    <i class="fas fa-archive"></i>
                    <span>Cadastro</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?page=maps">
                    <i class="fas fa-archive"></i>
                    <span>Teste de Mapa</span>
                </a>
            </li>
            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav id="cusnav" class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mt-4 text-dark">Aplicação focada na facilidade da reciclagem de resíduos.</h1>
                    </div>
                    <ul class="navbar-nav ml-auto">
                        <h2 class="h5 mt-3 text-dark">
                            <div id="time"></div>
                        </h2>
                    </ul>
                </nav>

                <div class="container-fluid">
                    <?php
                    $page = $_GET["page"];
                    switch ($page) {
                        default:
                            include_once "pages/welcome.php";
                            break;
                        case "form":
                            include_once "pages/form_cad_forn.php";
                            break;
                        case "maps":
                            include_once "pages/maps.php";
                            break;
                    }
                    ?>
                </div>
            </div>
            <!-- Créditos ao criador original, favor não remover! -->
            <footer class="sticky-footer bg-white py-3" data-toggle="modal" data-target="#CreditModal">
                <div class="container my-auto">
                    <div id="ownerInfo" class="footer-copyright font-12 text-center is-sucess footer">
                        <span>Copyright © 2021 - <?php echo date("Y"); ?> | Bin Recyle, Group.</span>
                    </div>
                </div>
            </footer>
        </div>
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>