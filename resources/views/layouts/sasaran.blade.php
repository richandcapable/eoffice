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
                                        <td>
                                            <div class="text-center">
                                                <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#tambahSasaran">
                                                    <i class="fa fa-plus"></i>Tambah Sasaran
                                                </button>
                                            </div>
                                            <div class="modal fade" id="tambahSasaran" tabindex="-1" role="dialog" aria-labelledby="tambahSasaranModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="tambahSasaranModalLabel">Tambah Sasaran</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- Isi form untuk menambah sasaran -->
                                                            <form action="/sasaran-store" method="POST" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="misi">Misi</label>
                                                                    <select class="form-control" name="kode">
                                                                        <option value="misi1">Misi 1</option>
                                                                        <option value="misi2">Misi 2</option>
                                                                        <!-- Tambahkan pilihan misi sesuai kebutuhan -->
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tujuan">Tujuan</label>
                                                                    <select class="form-control" name="tujuan">
                                                                        <option value="tujuan1">Tujuan 1</option>
                                                                        <option value="tujuan2">Tujuan 2</option>
                                                                        <!-- Tambahkan pilihan tujuan sesuai kebutuhan -->
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="indikatorTujuan">Indikator Tujuan</label>
                                                                    <select class="form-control" name="indikatorTujuan">
                                                                        <option value="indikator1">Indikator 1</option>
                                                                        <option value="indikator2">Indikator 2</option>
                                                                        <!-- Tambahkan pilihan indikator tujuan sesuai kebutuhan -->
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="namaSasaran">Nama Sasaran</label>
                                                                    <textarea class="form-control" rows="4" placeholder="Masukkan nama sasaran" name="nama_sasaran"></textarea>
                                                                </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Simpan Sasaran</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>                                                                                      
                                        </td>
                                        <td>
                                            <div id="visiContent">
                                                <p><b>Nama Sasaran</b></p>
                                            </div>
                                            <div class="container justify-content-center">
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="input-group mb-3">
                                                            <input type="text" class="form-control input-text" placeholder="Cari berdasarkan Nama Tujuan OPD" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-primary btn-sm" type="button">
                                                                    <i class="fas fa-filter"></i> Filter
                                                                </button>
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
                    </div>
                    <div class="container mt-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card rounded-0 border-0 shadow">
                                    <div class="card-body p-5">
                                        <!-- Bootstrap table -->
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">No.</th>
                                                        <th scope="col">Kode</th>
                                                        <th scope="col">Nama Sasaran</th>
                                                        <th scope="col">Opsi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($sasaran as $item)
                                                    <tr>
                                                        <td>{{$loop->iteration}}</td>
                                                        <td>{{ $item->kode }}</td>
                                                        <td>{{ $item->nama_sasaran }}</td>                                                  
                                                        <td>
                                                            <button class="btn btn-primary btn-sm">
                                                                <i class="far fa-eye"></i> Detail
                                                            </button>
                                                            @endforeach
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
    
</body>
</html>
