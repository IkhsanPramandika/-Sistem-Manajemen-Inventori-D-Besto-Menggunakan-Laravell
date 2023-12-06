<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SUPPLIER D'BESTO </title>
    <!-- Custom fonts for this template --> 
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" href="fontawesome-free-5.15.4-web/css/all.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.min.css')}}" rel="stylesheet">
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboardsupplier">
                <div class="sidebar-brand-icon">
                    {{-- <img src="fontawesome-free-5.15.4-web/img/ayam.png" alt="Logo"> --}}
                </div>
                <div class="sidebar-brand-text mx-3">d'Besto </sup></div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboardsupplier">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="infopengiriman">
                    <i class="fas fa-truck"></i>
                    <span>Info Pengiriman</span>
                </a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="produksupplier">
                    <i class="fas fa-clipboard-list"></i>
                    <span>Bahan Baku</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/">
                    <i class="fas fa-ban"></i>
                    <span>Keluar</span>
                </a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Notifikasi
                                </h6>
                                <a class="dropdown-item d-flex">
                                    <div class="popup">
                                        <p>Barang hampir habis!</p>
                                        <ul>
                                            <?php
                                            $data = DB::select('SELECT Nama_bahan FROM bahan_bakus WHERE Total_Produk < 8');
                                            foreach ($data as $row) {
                                                echo '<li>' . $row->Nama_bahan . '</li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <style>
                                        .popup {
                                            position: absolute;
                                            top: 70%;
                                            left: 3px;
                                            transform: translate(0, -50%);
                                            background-color: #f44336;
                                            color: white;
                                            padding: 40px;
                                            border-radius: 5px;
                                            display: none;
                                            width: 360px;
                                            text-align: center;
                                            white-space: nowrap;
                                            overflow: hidden;
                                            text-overflow: ellipsis;
                                        }
                                        .popup.show {
                                            display: block;
                                        }
                                        .popup p {
                                            margin-top: -10px;
                                        }
                                        .popup ul {
                                            margin-top: -5px;
                                        }
                                    </style>
                                    <audio id="notificationSound" src="public/assets/img/bahan.mp3"></audio>
                                    <script>
                                        // Request permission for notifications
                                        function requestNotificationPermission() {
                                            if ('Notification' in window) {
                                                // Check if permission is already granted
                                                if (Notification.permission === 'granted') {
                                                    showNotification();
                                                } else if (Notification.permission !== 'denied') {
                                                    // Request permission
                                                    Notification.requestPermission().then(function (permission) {
                                                        if (permission === 'granted') {
                                                            showNotification();
                                                        }
                                                    });
                                                }
                                            }
                                        }
                                        // Show notification
                                        function showNotification() {
                                            <?php
                                            $data = DB::select('SELECT * FROM bahan_bakus WHERE Total_Produk < 5');
                                            if (count($data) > 0) {
                                                echo 'document.querySelector(".popup").classList.add("show");';
                                                echo 'new Notification("Barang hampir habis!");';
                                                echo 'playNotificationSound();';
                                            }
                                            ?>
                                        }
                                        // Play notification sound
                                        function playNotificationSound() {
                                            var audio = document.getElementById('notificationSound');
                                            audio.play();
                                        }
                                        // Call the permission function
                                        window.addEventListener('load', function () {
                                            requestNotificationPermission();
                                        });
                                        // Play notification sound after user interaction
                                        document.addEventListener('click', function () {
                                            playNotificationSound();
                                        });
                                    </script>
                                    <div class="small text-gray-500"></div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/ " data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                        </li>
                    </ul>
                </nav>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- End of Main Content -->
            </div>
            <!-- End of Content Wrapper -->
        </div>
        <!-- End of Page Wrapper -->
        <!-- Scroll to Top Button -->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
        <!-- Logout Modal -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('assets/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript -->
        <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Custom scripts for all pages -->
        <script src="{{ asset('assets/js/sb-admin-2.min.js')}}"></script>
        <!-- Page level plugins -->
        <script src="{{ asset('assets/vendor/chart.js/Chart.min.js')}}"></script>
        <!-- Page level custom scripts -->
        <script src="{{ asset('assets/js/demo/chart-area-demo.js')}}"></script>
        <script src="{{ asset('assets/js/demo/chart-pie-demo.js')}}"></script>
    </body>
</html>
