<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="RAD DEFANCE TEAMS" />
        <meta name="author" content="RAD TEAMS" />
        <title>HALAMAN DASHBOARD RAD DAFANCES</title>
        <link rel="icon" href="<?php echo base_url('gambar') ?>favicon.ico" type="image/gif">
        <link href="<?= base_url('sb-admin') ?>/css/styles.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.css" />
        <script src="https://unpkg.com/leaflet-routing-machine@latest/dist/leaflet-routing-machine.js"></script>
        <script src="<?= base_url('sb-admin')?>/js/scripts.js"></script>      
        <script src="<?= base_url('sb-admin')?>/js/datatables-simple-demo.js"></script>   
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
      <!--  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
        
  </head>
    <body>
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="<?= base_url('Home') ?>">WEB RAD DEFANCE</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider"/></li>
                        <li><a class="dropdown-item" href="<?= base_url('Login') ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?= base_url('Home') ?>"> <!-- INI BERFUNGSI MEMANGGIL URL DARI CONTROLLER DENGAN NAMA FUNCTION INDEX -->
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard   <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <!-- INI ADALAH SLIDE BAR DATA DARI DATABASE UNTUK  -->
                            <div class="sb-sidenav-menu-heading">DATA DARI NON DATABASE</div>
                            <a class="nav-link" href="<?= base_url('Home/viewmap') ?>"> <!-- INI BERFUNGSI MEMANGGIL URL DARI CONTROLLER DENGAN NAMA FUNCTION VIEW MAP -->
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-map"></i></div>
                                VIEW MAP    <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/basemap') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-map-pin"></i></div>
                                BASE MAP    <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/viewmarker') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-location-dot"></i></div>
                                MARKER  <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/circle') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-location-arrow"></i></div>
                                ZONE  <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/polyline') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-arrow-trend-up"></i></div>
                                POLYLINE  <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/polygon') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-draw-polygon"></i></div>
                                POLYGON  <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/geojson') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-book-atlas"></i></div>
                                GEOJSON  <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('CoordinatesController/arduino') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-sharp fa-solid fa-thumbtack"></i></div>
                                GET-COORDINAT  <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/getcoordinatradius') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-location-crosshairs"></i></div>
                                GET-COORDINAT-ZONE  <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/geolocation') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-dot"></i></div>
                                GEOLOCATION  <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/rute') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-route"></i></div>
                                RUTE <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                            <a class="nav-link" href="<?= base_url('Home/ruteuser') ?>">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-road"></i></i></div>
                                RUTE-USER <!-- INI BERFUNGSI PADA BAGIAN SAMPING / SLIDE  -->
                            </a>
                           <!-- INI ADALAH SLIDE BAR DATA NON DATABASE -->
                            <div class="sb-sidenav-menu-heading">DATA DARI DATABASE</div>

                            <!-- INI MENU PERTAMA -->
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Layouts
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="layout-static.html">Static Navigation</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                                </nav>
                            </div>

                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Tables
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">RAD</div>
                        RAD TEAM
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <!-- INI ADALAH KONTEN UTAMA -->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?= $head ?></h1>
                        <hr>
                        <?php if($page) {
                            echo view($page);
                        } ?>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; RAD DAFANCE Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?= base_url('sb-admin')?>/assets/demo/chart-area-demo.js"></script>
        <script src="<?= base_url('sb-admin')?>/assets/demo/chart-bar-demo.js"></script>
        <script src="<?= base_url('sb-admin')?>/assets/demo/chart-pie-demo.js"></script>
        <script src="<?= base_url('sb-admin')?>/assets/demo/datatables-demo.js"></script>
    </body>
</html>
