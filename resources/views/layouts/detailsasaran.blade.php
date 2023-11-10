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
                                            <a class="dropdown-item" data-tip="editIndikator" data-toggle="modal" data-target="#editIndikator">Edit</a>
                                            <a class="dropdown-item" data-tip="hapusIndikator" data-toggle="modal" data-target="#hapusIndikator">Hapus</a>
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
                                <style>
                                    .btn-outline-primary {
                                        background-color: rgb(8,164,196);
                                        color: white;
                                    }
                                </style>
                                <button type="button" class="btn btn-outline-secondary" onclick="kembaliKeHalamanSasaran()">Kembali</button>
                                <button class="btn btn-outline-primary" data-toggle="modal" data-target="#tambahIndikatorModal"><i class="fas fa-plus"></i> Tambah Indikator</button>
                            </div>
                            
                            <script>
                                function kembaliKeHalamanSasaran() {
                                    window.location.href = "sasaran";
                                }
                            </script>
                        </div>
                    </div>
                </div>
                
                <!-- Modal Tambah Indikator -->
                <div class="modal fade" id="tambahIndikatorModal" tabindex="-1" role="dialog" aria-labelledby="tambahIndikatorModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <style>
                                    .modal-header {
                                        background-color: rgb(8,164,196);
                                        color: white; /* Untuk mengubah warna teks menjadi putih atau sesuai kebutuhan */
                                    }
                                </style>
                                <h5 class="modal-title" id="tambahIndikatorModalLabel">Tambah Indikator</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/indikator-store" method="POST">
                                    @csrf                       
                                        <div class="form-group">
                                            <label for="indikator"><b>Nama Indikator</b></label>
                                            <textarea class="form-control" name="indikator" rows="1" placeholder="Masukkan nama Indikator"></textarea>
                                        </div>
                        
                                        <div class="form-group">
                                            <label for="satuanPengukuran"><b>Satuan Pengukuran<b></label>
                                            <select class="form-control" name="satuan_pengukuran">
                                                <option selected="selected" disabled="true">Pilih Satuan Pengukuran</option>
                                                <option value="Lokasi">Lokasi</option>
                                                <option value="kegiatan">Kegiatan</option>
                                                <option value="Titik">Titik</option>
                                                <option value="Sasaran">Sasaran</option>
                                                <option value="SR">SR</option>
                                                <option value="Kali">Kali</option>
                                                <option value="minggu sekali dalam setahun">minggu sekali dalam setahun</option>
                                                <option value="Forum/Kampung">Forum/Kampung</option>
                                                <option value="Kelompok">Kelompok</option>
                                                <option value="Orang">Orang</option>
                                                <option value="KK">KK</option>
                                                <option value="Hektar">Hektar</option>
                                                <option value="Unit">Unit</option>
                                                <option value="Ha">Ha</option>
                                                <option value="m3/detik">m3/detik</option>
                                                <option value="KM">KM</option>
                                                <option value="Kecamatan">Kecamatan</option>
                                                <option value="Route">Route</option>
                                                <option value="Paket">Paket</option>
                                                <option value="Organisasi">Organisasi</option>
                                                <option value="Sekolah/Pesantren">Sekolah/Pesantren</option>
                                                <option value="Sekolah">Sekolah</option>
                                                <option value="Siswa/guru">Siswa/guru</option>
                                                <option value="Siswa">Siswa</option>
                                                <option value="Peserta">Peserta</option>
                                                <option value="Penyuluh">Penyuluh</option>
                                                <option value="Tokoh">Tokoh</option>
                                                <option value="Responden">Responden</option>
                                                <option value="Bulan">Bulan</option>
                                                <option value="Minggu">Minggu</option>
                                                <option value="Hari">Hari</option>
                                                <option value="%">%</option>
                                                <!-- Tambahkan pilihan satuan pengukuran lainnya di sini -->
                                            </select>
                                        </div>
                                        
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Kondisi Awal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target Kondisi Awal" name="target_kondisi_awal"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Tahun 2021</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2021" name="target_tahun_2021"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Tahun 2022</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2022" name="target_tahun_2022"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Tahun 2023</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2023" name="target_tahun_2023"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Tahun 2024</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2024" name="target_tahun_2024"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Kondisi Akhir</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2025" name="target_tahun_2025"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Kondisi Akhir</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target Akhir" name="target_kondisi_akhir"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>                                                             
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
                <!-- Modal Edit Indikator -->
                <div class="modal fade" id="editIndikator" tabindex="-1" role="dialog" aria-labelledby="editIndikatorModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <style>
                                    .modal-header {
                                        background-color: rgb(8,164,196);
                                        color: white; /* Untuk mengubah warna teks menjadi putih atau sesuai kebutuhan */
                                    }
                                </style>
                                <h5 class="modal-title" id="editIndikatorModal">Edit Indikator</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="/indikator-store" method="POST">
                                    @csrf                       
                                        <div class="form-group">
                                            <label for="indikator"><b>Nama Indikator</b></label>
                                            <textarea class="form-control" name="indikator" rows="1" placeholder="Masukkan nama Indikator"></textarea>
                                        </div>
                        
                                        <div class="form-group">
                                            <label for="satuanPengukuran"><b>Satuan Pengukuran</b></label>
                                            <select class="form-control" name="satuan_pengukuran">
                                                <option selected="selected" disabled="true">Pilih Satuan Pengukuran</option>
                                                <option value="Lokasi">Lokasi</option>
                                                <option value="kegiatan">Kegiatan</option>
                                                <option value="Titik">Titik</option>
                                                <option value="Sasaran">Sasaran</option>
                                                <option value="SR">SR</option>
                                                <option value="Kali">Kali</option>
                                                <option value="minggu sekali dalam setahun">minggu sekali dalam setahun</option>
                                                <option value="Forum/Kampung">Forum/Kampung</option>
                                                <option value="Kelompok">Kelompok</option>
                                                <option value="Orang">Orang</option>
                                                <option value="KK">KK</option>
                                                <option value="Hektar">Hektar</option>
                                                <option value="Unit">Unit</option>
                                                <option value="Ha">Ha</option>
                                                <option value="m3/detik">m3/detik</option>
                                                <option value="KM">KM</option>
                                                <option value="Kecamatan">Kecamatan</option>
                                                <option value="Route">Route</option>
                                                <option value="Paket">Paket</option>
                                                <option value="Organisasi">Organisasi</option>
                                                <option value="Sekolah/Pesantren">Sekolah/Pesantren</option>
                                                <option value="Sekolah">Sekolah</option>
                                                <option value="Siswa/guru">Siswa/guru</option>
                                                <option value="Siswa">Siswa</option>
                                                <option value="Peserta">Peserta</option>
                                                <option value="Penyuluh">Penyuluh</option>
                                                <option value="Tokoh">Tokoh</option>
                                                <option value="Responden">Responden</option>
                                                <option value="Bulan">Bulan</option>
                                                <option value="Minggu">Minggu</option>
                                                <option value="Hari">Hari</option>
                                                <option value="%">%</option>
                                                <!-- Tambahkan pilihan satuan pengukuran lainnya di sini -->
                                            </select>
                                        </div>
                                        
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Kondisi Awal</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target Kondisi Awal" name="target_kondisi_awal"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Tahun 2021</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2021" name="target_tahun_2021"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Tahun 2022</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2022" name="target_tahun_2022"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Tahun 2023</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2023" name="target_tahun_2023"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Target Tahun 2024</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2024" name="target_tahun_2024"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Kondisi Akhir</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target 2025" name="target_tahun_2025"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-6">
                                                    <table class="table table-lg table-bordered">
                                                        <thead class="bg-secondary text-black">
                                                            <style>
                                                                .text-center {
                                                                    text-align: center;
                                                                }
                                                            </style>
                                                            <tr class="bg-light">
                                                                <th class="text-center">Kondisi Akhir</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td><input type="text" class="form-control" placeholder="Masukkan Target Akhir" name="target_kondisi_akhir"></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>                                                             
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="hapusIndikator" tabindex="-1" role="dialog" aria-labelledby="hapusIndikatorModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="hapusTujuanModalLabel">Hapus Tujuan</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Isi pesan konfirmasi penghapusan -->
                                        <p>Anda yakin ingin menghapus tujuan ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <!-- Tombol konfirmasi penghapusan -->
                                        <form action="/hapus-indikator" method="POST" enctype="multipart/form-data">
                                            @method('DELETE') <!-- Menggunakan DELETE method untuk menghapus data -->
                                            @csrf
                                            <button type="submit" class="btn btn-danger" id="konfirmasiHapusTujuan">Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
    <!-- Footer -->
    @include('layouts.footer')
    <!-- End of Footer -->
    </div>                
        <!-- End of Content Wrapper -->
    </div>
    
</body>
</html>
