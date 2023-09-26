<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EOffice Kota Banjarbaru</title>

    <!-- Custom fonts and styles -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered w-100" style="background-color: white;">
                                    <tr>
                                        <td>
                                            <b>VISI 
                                                <button id="editVisiBtn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm rounded-pill float-right">Edit Visi</button>
                                            </b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Visi Anda akan ditempatkan di sini. Misalnya:
                                            <p>Menjadi pemimpin dalam inovasi teknologi dan memberikan solusi terbaik kepada pelanggan.</p>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table border-right: 0; w-100" style="background-color: white;">
                                    <tr>
                                        <td>
                                            <b>MISI</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="panel-body table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th style="border-top: 0; padding-top: 30px;">#</th>
                                                            <th style="border-top: 0; padding-top: 30px;">Nama Misi</th>
                                                            <th style="border-top: 0; padding-top: 30px;">Opsi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Vincent Williamson</td>
                                                            <td>
                                                                <ul class="action-list">
                                                                    <li><a href="#" data-tip="edit" class="text-warning"><i class="fa fa-edit"></i></a> <a href="#" data-tip="delete" class="text-danger"><i class="fa fa-trash"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>Taylor Reyes</td>
                                                            <td>
                                                                <ul class="action-list">
                                                                    <li><a href="#" data-tip="edit" class="text-warning"><i class="fa fa-edit"></i></a> <a href="#" data-tip="delete" class="text-danger"><i class="fa fa-trash"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>Taylor Swift</td>
                                                            <td>
                                                                <ul class="action-list">
                                                                    <li><a href="#" data-tip="edit" class="text-warning"><i class="fa fa-edit"></i></a> <a href="#" data-tip="delete" class="text-danger"><i class="fa fa-trash"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>Abel Tesfaye</td>
                                                            <td>
                                                                <ul class="action-list">
                                                                    <li><a href="#" data-tip="edit" class="text-warning"><i class="fa fa-edit"></i></a> <a href="#" data-tip="delete" class="text-danger"><i class="fa fa-trash"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>Ahmad Dhani</td>
                                                            <td>
                                                                <ul class="action-list">
                                                                    <li><a href="#" data-tip="edit" class="text-warning"><i class="fa fa-edit"></i></a> <a href="#" data-tip="delete" class="text-danger"><i class="fa fa-trash"></i></a></li>
                                                                </ul>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-left">
                                                <button class="btn btn-primary text-white" style="margin-top: 10px;"><i class="fa fa-plus"></i> Tambah Misi</button>
                                            </div>
                                            
                                            
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.footer')
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Custom scripts and plugins -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
</body>

</html>
