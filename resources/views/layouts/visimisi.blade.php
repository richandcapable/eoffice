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
                                                <button id="editVisiBtn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm rounded-pill float-right" data-toggle="modal" data-target="#editVisiModal">Edit Visi</button>
                                            </b>
                                            <div class="modal fade" id="editVisiModal" tabindex="-1" role="dialog" aria-labelledby="editVisiModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editVisiModalLabel">Ubah Visi</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Isi form untuk mengubah visi -->
                                                            <form>
                                                                <div class="form-group">
                                                                    <label for="newVisi">Visi Baru</label>
                                                                    <input type="text" class="form-control" id="newVisi" placeholder="Masukkan visi baru">
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="button" class="btn btn-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
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
                                <table class="table table-bordered w-100" style="background-color: white; border: none;">
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
                                                            <th>No.</th>
                                                            <th>Nama Misi</th>
                                                            <th>Opsi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Vincent Williamson</td>
                                                            <td>
                                                                <a href="#" data-tip="edit" class="text-warning"><i class="fas fa-edit"></i></a>
                                                                <a href="#" data-tip="delete" class="text-danger"><i class="fas fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <!-- Tambahkan baris Misi lainnya sesuai kebutuhan -->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="text-left">
                                                <button id="tambahMisiBtn" class="btn btn-outline-primary" style="margin-top: 10px;" data-toggle="modal" data-target="#tambahMisiModal"><i class="fas fa-plus"></i> Tambah Misi</button>
                                                <div class="modal fade" id="tambahMisiModal" tabindex="-1" role="dialog" aria-labelledby="tambahMisiModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="tambahMisiModalLabel">Tambah Misi</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <!-- Isi form untuk menambahkan misi -->
                                                                <form>
                                                                    <div class="form-group">
                                                                        <label for="namaMisi">Nama Misi</label>
                                                                        <input type="text" class="form-control" id="namaMisi" placeholder="Masukkan nama misi">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <button type="button" class="btn btn-primary">Simpan Misi</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>

                        <div class="container mt-4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table" style="background-color: white;">
                                        <tr>
                                            <td>
                                                <b>Tujuan</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Misi 1. Meningkatkan Kualitas Kehidupan Masyarakat</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-cog"></i> <!-- Ikon setelan (setting) -->
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="#" data-tip="edit">Edit</a>
                                                        <a class="dropdown-item" href="#" data-tip="delete">Hapus</a>
                                                    </div>
                                                </div>
                                                <b>Tujuan 1.</b> Tujuan
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left">
                                                    <button class="btn btn-outline-primary" style="margin-top: 10px;"><i class="fas fa-plus"></i> Tambah Tujuan Misi 1</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="panel-body table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>No.</th>
                                                                <th>Indikator</th>
                                                                <th>Kondisi Awal</th>
                                                                <th>Target 2021</th>
                                                                <th>Target 2022</th>
                                                                <th>Target 2023</th>
                                                                <th>Target 2024</th>
                                                                <th>Target 2025</th>
                                                                <th>Kondisi Akhir</th>
                                                                <th>Satuan</th>
                                                                <th>Opsi</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>Vincent Williamson</td>
                                                                <td>79.10</td>
                                                                <td>79.20</td>
                                                                <td>79.30</td>
                                                                <td>79.40</td>
                                                                <td>79.50</td>
                                                                <td>79.60</td>
                                                                <td>79.60</td>
                                                                <td>Indeks</td>
                                                                <td>
                                                                    <a href="#" data-tip="edit" class="text-warning"><i class="fas fa-edit"></i></a>
                                                                    <a href="#" data-tip="delete" class="text-danger"><i class="fas fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            <!-- Tambahkan baris Indikator lainnya sesuai kebutuhan -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="text-right">
                                                    <button class="btn btn-outline-primary" style="margin-top: 10px;"><i class="fas fa-plus"></i> Tambah Indikator</button>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Tambahkan Misi dan Tujuan lainnya sesuai kebutuhan -->
                                    </table>
                                </div>
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
    {{-- @include('layouts.tambahtujuan') --}}
</body>
</html>
