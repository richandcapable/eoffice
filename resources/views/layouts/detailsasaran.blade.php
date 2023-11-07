<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EOffice Kota Banjarbaru</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('layouts.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('layouts.navbarsasaran')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered w-100" style="background-color: white;">
                                    <tr>
                                        <td colspan="2">
                                            <b>Detail Sasaran</b>
                                            <div class="text-center">
                                                <tr>
                                                    <td>
                                                        <b>Visi</b>
                                                        <p>BANJARBARU JUARA</p>
                                                    </td>
                                                    <td>
                                                        <b>Tujuan</b>
                                                        <p>Tujuan Edit</p>
                                                    </td>
                                                </tr>
                                            </div>                                        
                                        </td>
                                        <td>
                                            <div id="visiContent">
                                                <p><b>Misi</b></p>
                                            </div>
                                            <div class="container justify-content-center">
                                                <div class="row">
                                                    <p>Misi</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <b>Indikator Tujuan</b>
                                            <p>Indikator 1</p>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </tr>
                
                </div>
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-bordered" style="background-color: white;">
                                <thead>
                                    <tr>
                                        <td colspan="9">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-outline-secondary btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-cog fa-s"></i><!-- Ikon setelan (setting) -->
                                        </button>
                                        <p class="ml-3 text-center"><b>Nama Sasaran :</b> Sasaran Misi</p> 
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" data-tip="editTujuan" data-toggle="modal" data-target="#editTujuan">Edit</a>
                                            <a class="dropdown-item" data-tip="hapusTujuan" data-toggle="modal" data-target="#hapusTujuan">Hapus</a>
                                        </div>
                                    </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>#</th>
                                        <th>Indikator</th>
                                        <th>Target 2021</th>
                                        <th>Target 2022</th>
                                        <th>Target 2023</th>
                                        <th>Target 2024</th>
                                        <th>Target 2025</th>
                                        <th>Satuan</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>test123</td>
                                        <td>1111</td>
                                        <td>2222</td>
                                        <td>3333</td>
                                        <td>4444</td>
                                        <td>5555</td>
                                        <td>%</td>
                                        <td>
                                            <a data-tip="editIndikator" href="/indikator-update" class="text-warning" data-toggle="modal" data-target="#editIndikatorModal"><i class="fas fa-edit"></i></a>
                                            <a data-tip="delete" class="text-danger"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    <!-- Tambahkan baris Indikator lainnya sesuai kebutuhan -->
                                </tbody>
                            </table>
                            <div class="text-right">
                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Kembali</button>
                                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#tambahIndikatorModal"><i class="fas fa-plus"></i> Tambah Indikator</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Edit Indikator -->
                <div class="modal fade" id="editIndikatorModal" tabindex="-1" role="dialog" aria-labelledby="editIndikatorModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editIndikatorModalLabel">Ubah Indikator</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/indikator-update" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="indikator">Indikator:</label>
                                        <textarea class="form-control" name="indikator" rows="4" placeholder="Masukkan Indikator di sini"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="satuanPengukuran">Satuan Pengukuran:</label>
                                        <select class="form-control" name="satuan_pengukuran">
                                            <option selected="selected" disabled="true">Pilih Satuan Pengukuran</option>
                                            <option value="Lokasi">Lokasi</option>
                                            <!-- Tambahkan pilihan satuan pengukuran lainnya di sini -->
                                        </select>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <table class="table table-lg table-bordered">
                                                    <thead class="bg-secondary text-black">
                                                        <tr class="bg-light">
                                                            <th>Target Kondisi Awal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target Kondisi Awal"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- Tambahkan kolom target lainnya sesuai kebutuhan -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- Footer -->
    @include('layouts.footer')
    <!-- End of Footer -->
    </div>                
        <!-- End of Content Wrapper -->
    </div>
    
</body>
</html>
