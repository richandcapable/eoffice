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
                                                            <form action="/visimisi-update/1" method="POST" enctype="multipart/form-data">
                                                                @method('PUT')
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="newVisi">Visi Baru</label>
                                                                    <input type="text" class="form-control" name="visi" placeholder="Masukkan visi baru">
                                                                </div>                                                                                                           
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>  
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            @foreach ($visis as $item)
                                                {{ $item->visi }}
                                            @endforeach
                                            <!-- Menampilkan visi dari database -->

                                            {{-- @if(!empty($visis))
                                                <p>{{ $visis->visi}}</p>
                                            @else
                                                <p>Belum ada visi yang ditetapkan.</p>
                                            @endif --}}
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--TABEL MISI-->
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
                                                        @foreach ($misi as $data)
                                                        @php($no=1)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{ $data->misi }}</td>
                                                            <td>
                                                                <a data-tip="editMisi" href="/visimisi-update/{{ $data->id }}" class="text-warning" data-toggle="modal" data-target="#editMisi"><i class="fas fa-edit"></i></a>
                                                                <div class="modal fade" id="editMisi" tabindex="-1" role="dialog" aria-labelledby="editMisiModalLabel" aria-hidden="true">
                                                                    <div class="modal-dialog" role="document">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="editMisiModalLabel">Ubah Misi</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <!-- Isi form untuk mengubah misi -->
                                                                                <form action="/visimisi-update/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                                                                    @method('PUT')
                                                                                    @csrf
                                                                                    <div class="form-group">
                                                                                        <label for="newMisi">Misi Baru</label>
                                                                                        <input type="text" class="form-control" name="misi" placeholder="Masukkan misi baru">
                                                                                    </div>                                                         
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                            </div>
                                                                                </form>   
                                                                            <script>
                                                                                //message with toastr
                                                                                @if(session()->has('success'))
                                                                                
                                                                                    toastr.success('{{ session('success') }}', 'BERHASIL!'); 
                                                                        
                                                                                @elseif(session()->has('error'))
                                                                        
                                                                                    toastr.error('{{ session('error') }}', 'GAGAL!'); 
                                                                                    
                                                                                @endif
                                                                            </script>
                                                                        </div>
                                                                    </div>
                                                                </div>   
                                                                <a href="/hapus/misi/{{$data->id}}" class="btn btn-danger btn-flat btn-sm ml-1 btn-delete"> <i class="fa fa-trash"></i></a></td>
                                                            </td>
                                                        </tr>
                                                        @endforeach 
                                                        <div class="modal fade" id="editMisiModal" tabindex="-1" role="dialog" aria-labelledby="editMisiModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">
                                                                    <script>
                                                                        //message with toastr
                                                                        @if(session()->has('success'))
                                                                        
                                                                            toastr.success('{{ session('success') }}', 'BERHASIL!'); 
                                                                
                                                                        @elseif(session()->has('error'))
                                                                
                                                                            toastr.error('{{ session('error') }}', 'GAGAL!'); 
                                                                            
                                                                        @endif
                                                                    </script>
                                                                </div>
                                                            </div>
                                                        </div>  
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
                                                                <form action="/misi-store" method="POST">
                                                                    @csrf
                                                                    <div class="form-group">
                                                                        <label for="namaMisi">Nama Misi</label>
                                                                        <input type="text" class="form-control" name="misi" placeholder="Masukkan nama misi">
                                                                    </div>

                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan Misi</button>
                                                                    </div>
                                                                </form>
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
                                            <td>{{ $data->misi }}</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                @foreach($tujuan as $data)
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="fas fa-cog"></i> <!-- Ikon setelan (setting) -->
                                                    </button>
                                                    <p class="ml-2"><b>Tujuan.{{$loop->iteration}}</b> {{ $data->tujuan }}</p> 
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" data-tip="editTujuan" data-toggle="modal" data-target="#editTujuan">Edit</a>
                                                        <a class="dropdown-item" data-tip="hapusTujuan" data-toggle="modal" data-target="#hapusTujuan">Hapus</a>
                                                    </div>
                                                </div>
                                                @endforeach                                                
                                            </td>
                                        </tr>
                                        <!-- Modal Edit Tujuan -->
                                        <div class="modal fade" id="editTujuan" tabindex="-1" role="dialog" aria-labelledby="editTujuanModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="editTujuanModalLabel">Edit Tujuan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Isi form untuk mengubah tujuan -->
                                                        <form action="/tujuan-update/{{ $data->id }}'" method="POST" enctype="multipart/form-data">
                                                            @method('PUT')
                                                            @csrf
                                                            <div class="form-group">
                                                                <label for="newTujuan">Tujuan Baru</label>
                                                                <input type="text" class="form-control" name="tujuan" placeholder="Masukkan tujuan baru">
                                                            </div>
                                                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- Modal Hapus Tujuan -->
                                        <div class="modal fade" id="hapusTujuan" tabindex="-1" role="dialog" aria-labelledby="hapusTujuanModalLabel" aria-hidden="true">
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
                                                        <form action="/hapus-tujuan/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                                                            @method('DELETE') <!-- Menggunakan DELETE method untuk menghapus data -->
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger" id="konfirmasiHapusTujuan">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                                                                                        
                                                                                                                         
                                                                </div>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="text-left">
                                                    <button class="btn btn-outline-primary" style="margin-top: 10px;" data-toggle="modal" data-target="#tambahTujuanModal">
                                                        <i class="fas fa-plus"></i> Tambah Tujuan Misi 1
                                                    </button>
                                                </div>
                                                
                                                <!-- Modal -->
                                                <div class="modal fade" id="tambahTujuanModal" tabindex="-1" role="dialog" aria-labelledby="tambahTujuanModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="tambahTujuanModalLabel">Tambah Tujuan</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                            <form action="/tujuan-store" method="POST">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="misi">Misi</label>
                                                                    <p>{{ $data->misi }}</p>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="Tujuan">Tujuan</label>
                                                                    <textarea class="form-control" id="misiTujuan" rows="4" placeholder="Masukkan Tujuan" name="tujuan"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
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
                                                            @foreach($indikator as $item)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{ $item->indikator }}</td>
                                                                <td>{{ $item->satuan_pengukuran }}</td>
                                                                <td>{{ $item->target_kondisi_awal }}</td>
                                                                <td>{{ $item->target_tahun_2021 }}</td>
                                                                <td>{{ $item->target_tahun_2022 }}</td>
                                                                <td>{{ $item->target_tahun_2023 }}</td>
                                                                <td>{{ $item->target_tahun_2024 }}</td>
                                                                <td>{{ $item->target_tahun_2025 }}</td>
                                                                <td>{{ $item->target_kondisi_akhir }}</td>
                                                                <td>
                                                                    <a data-tip="editIndikator" href="/indikator-update/{{ $item->id }}" class="text-warning" data-toggle="modal" data-target="#editIndikatorModal"><i class="fas fa-edit"></i></a>
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
                                                                                    <form action="/indikator-update/{{ $item->id }}" method="POST">
                                                                                        @method('PUT')
                                                                                        @csrf
                                                                                    <div class="form-group">
                                                                                        <label for="misiTujuan">Misi</label>
                                                                                    </div>
                    
                                                                                    <div class="form-group">
                                                                                        <label for="misiTujuan">Tujuan</label> 
                                                                                    </div>
                                                                    
                                                                                    <div class="form-group">
                                                                                        <label for="indikator">Indikator:</label>
                                                                                        <textarea class="form-control" name="indikator" rows="4" placeholder="Masukkan Indikator di sini"></textarea>
                                                                                    </div>
                                                                    
                                                                                    <div class="form-group">
                                                                                        <label for="satuanPengukuran">Satuan Pengukuran:</label>
                                                                                        <select class="form-control" name="satuan_pengukuran">
                                                                                            <option selected="selected" disabled="true">Pilih Satuan Pengukuran</option>
                                                                                            <option value="Lokasi">Lokasi</option>
                                                                                            <option value="Kegiatan">Kegiatan</option>
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
                                                                                            <div class="col-md-6">
                                                                                                <table class="table table-lg table-bordered">
                                                                                                    <thead class="bg-secondary text-black">
                                                                                                        <tr class="bg-light">
                                                                                                            <th>Target Tahun 2021</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target 2021"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <table class="table table-lg table-bordered">
                                                                                                    <thead class="bg-secondary text-black">
                                                                                                        <tr class="bg-light">
                                                                                                            <th>Target Tahun 2022</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target 2022"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <table class="table table-lg table-bordered">
                                                                                                    <thead class="bg-secondary text-black">
                                                                                                        <tr class="bg-light">
                                                                                                            <th>Target Tahun 2023</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target 2023"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <table class="table table-lg table-bordered">
                                                                                                    <thead class="bg-secondary text-black">
                                                                                                        <tr class="bg-light">
                                                                                                            <th>Target Tahun 2024</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target 2024"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <table class="table table-lg table-bordered">
                                                                                                    <thead class="bg-secondary text-black">
                                                                                                        <tr class="bg-light">
                                                                                                            <th>Target 2025</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target 2025"></td>
                                                                                                        </tr>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <table class="table table-lg table-bordered">
                                                                                                    <thead class="bg-secondary text-black">
                                                                                                        <tr class="bg-light">
                                                                                                            <th>Target Kondisi Akhir</th>
                                                                                                        </tr>
                                                                                                    </thead>
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td><input type="text" class="form-control" placeholder="Masukkan Target Akhir"></td>
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
                                                                                </form> 
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                     
                                                                    <a href="/hapus/indikator/{{$item->id}}" data-tip="delete" class="text-danger"><i class="fas fa-trash"></i></a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                            <!-- Tambahkan baris Indikator lainnya sesuai kebutuhan -->
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="text-right">
                                                    <button class="btn btn-outline-primary" style="margin-top: 10px;" data-toggle="modal" data-target="#tambahIndikatorModal">
                                                        <i class="fas fa-plus"></i> Tambah Indikator
                                                    </button>
                                                </div>
                                                
                                                <!-- Modal -->
                                                        <div class="modal fade" id="tambahIndikatorModal" tabindex="-1" role="dialog" aria-labelledby="tambahIndikatorModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="tambahIndikatorModalLabel">Tambah Indikator</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <form action="/indikator-store" method="POST">
                                                                            @csrf
                                                                                <div class="form-group">
                                                                                    <label for="misiTujuan">Misi</label>
                                                                                    <p> {{ $data->misi }}
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="misiTujuan">Tujuan</label> 
                                                                                    
                                                                                </div>
                                                                
                                                                                <div class="form-group">
                                                                                    <label for="indikator">Indikator:</label>
                                                                                    <textarea class="form-control" name="indikator" rows="4" placeholder="Masukkan Indikator di sini"></textarea>
                                                                                </div>
                                                                
                                                                                <div class="form-group">
                                                                                    <label for="satuanPengukuran">Satuan Pengukuran:</label>
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
                                                                                                    <tr class="bg-light">
                                                                                                        <th>Target Kondisi Awal</th>
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
                                                                                                    <tr class="bg-light">
                                                                                                        <th>Target Tahun 2021</th>
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
                                                                                                    <tr class="bg-light">
                                                                                                        <th>Target Tahun 2022</th>
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
                                                                                                    <tr class="bg-light">
                                                                                                        <th>Target Tahun 2023</th>
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
                                                                                                    <tr class="bg-light">
                                                                                                        <th>Target Tahun 2024</th>
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
                                                                                                    <tr class="bg-light">
                                                                                                        <th>Target 2025</th>
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
                                                                                                    <tr class="bg-light">
                                                                                                        <th>Target Kondisi Akhir</th>
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
   
    {{-- @include('layouts.tambahtujuan') --}}
</body>
</html>
