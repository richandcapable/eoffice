<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Sidebar styling */
        .bg-primary {
            background-color: #007bff !important; /* Ganti dengan warna biru muda yang Anda inginkan */
        }

        .navbar-dark .navbar-toggler-icon {
            background-color: #000; /* Ganti dengan warna hitam */
        }

        .toggled .sidebar {
            width: 80px; /* Lebar saat tertutup */
        }

        .toggled .sidebar-brand-text {
            display: none;
        }

        .toggled .sidebar-brand-icon img {
            width: 30px; /* Ukuran logo saat tertutup */
        }

        /* Icon style */
        .sidebar .nav-item .nav-link i {
            color: #fff; /* Warna icon */
        }
    </style>
</head>
<body>
    <div id="wrapper">
        <ul class="navbar-nav bg-white sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="img/Banjarbaru.png" width="50" height="60">
                </div>
                
                <div class="sidebar-brand-text mx-3 text-gray-600">IDAMAN Office Kota Banjarbaru</div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span class="text-gray-600">Admin</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading text-gray-600">
                -- SICERDAS
            </div>

            <!-- Nav Item - RPJMD -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#s" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                 <i class="fas fa-fw fa-cog"></i>
                 <span class="text-gray-600">RPJMD <i class="fas fa-chevron-down text-primary"></i></span>
                </a>     
               
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="visimisi">Visi Misi</a>
                        <a class="collapse-item" href="sasaran">Sasaran</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
        </ul>
    </div>

    <!-- Bootstrap JavaScript and jQuery (Add these scripts at the end of your body tag) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    

    <!-- JavaScript to Toggle Sidebar -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const sidebarToggle = document.getElementById("sidebarToggle");
            const wrapper = document.getElementById("wrapper");

            sidebarToggle.addEventListener("click", function () {
                if (wrapper.classList.contains("toggled")) {
                    wrapper.classList.remove("toggled");
                } else {
                    wrapper.classList.add("toggled");
                }
            });
        }); 
    </script>
</body>
</html>
