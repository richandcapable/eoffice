<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="icon" href="img/Banjarbaru.png" type="image/x-icon">
		<title>
			EOffice Kota Banjarbaru
		</title>
		<!-- Custom fonts and styles -->
		<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
		type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">
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
												<b>
													VISI
													<button id="editVisiBtn" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm rounded-pill float-right"
													data-toggle="modal" data-target="#editVisiModal">
														Edit Visi
													</button>
												</b>
												@include('modals.editvisi')
											</td>
										</tr>
										<tr>
											<td>
												@foreach ($visis as $item) {{ $item->visi }} @endforeach
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
										<b>
											MISI
										</b>
									</td>
								</tr>
								<tr>
									<td>
										<div class="panel-body table-responsive">
											<table class="table">
												<thead>
													<tr>
														<th>
															No.
														</th>
														<th>
															Nama Misi
														</th>
														<th>
															Opsi
														</th>
													</tr>
												</thead>
												<tbody>
													@foreach ($misi as $data) @php($no = 1)
													<tr>
														<td>
															{{ $loop->iteration }}
														</td>
														<td>
															{{ $data->misi }}
														</td>
														<td>
															<a data-tip="editMisi" href="/visimisi-update/{{ $data->id }}" class="text-warning"
															data-toggle="modal" data-target="#editMisi">
																<i class="fas fa-edit">
																</i>
															</a>
															@include('modals.editmisi')
															<a href="/hapus/misi/{{ $data->id }}" class="btn btn-danger btn-flat btn-sm ml-1 btn-delete">
																<i class="fa fa-trash">
																</i>
															</a>
														</td>
									</td>
									</tr>
									<!-- Tambahkan baris Misi lainnya sesuai kebutuhan -->
									</tbody>
									@endforeach
									</table>
									</div>
									<div class="text-left">
										<button id="tambahMisiBtn" class="btn btn-outline-primary" style="margin-top: 10px;"
										data-toggle="modal" data-target="#tambahMisiModal">
											<i class="fas fa-plus">
											</i>
											Tambah Misi
										</button>
										@include('modals.tambahmisi')
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
											<b>
												Tujuan
											</b>
										</td>
									</tr>
									<tr>
										@foreach ($misi as $data)
										<td>
											{{ $data->misi }}
										</td>
									</tr>
									@endforeach
									<tr>
										<td>
											@foreach ($tujuan as $data)
											<div class="btn-group">
												<button type="button" class="btn btn-outline-secondary dropdown-toggle"
												data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
													<i class="fas fa-cog">
													</i>
													<!-- Ikon setelan (setting) -->
												</button>
												<p class="ml-2">
													<b>
														Tujuan.{{ $loop->iteration }}
													</b>
													{{ $data->tujuan }}
												</p>
												<div class="dropdown-menu">
													<a class="dropdown-item" data-tip="editTujuan" data-toggle="modal" data-target="#editTujuan">
														Edit
													</a>
													<a class="dropdown-item" data-tip="hapusTujuan" data-toggle="modal" data-target="#hapusTujuan">
														Hapus
													</a>
												</div>
											</div>
										</td>
									</tr>
									<!-- Modal Edit Tujuan -->
									<div class="modal fade" id="editTujuan" tabindex="-1" role="dialog" aria-labelledby="editTujuanModalLabel"
									aria-hidden="true">
										<div class="modal-dialog" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="editTujuanModalLabel">
														Edit Tujuan
													</h5>
													<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														<span aria-hidden="true">
															&times;
														</span>
													</button>
												</div>
												<div class="modal-body">
													<!-- Isi form untuk mengubah tujuan -->
													<form action="/tujuan-update/{{ $data->id }}'" method="POST" enctype="multipart/form-data">
														@method('PUT') @csrf
														<div class="form-group">
															<label for="newTujuan">
																Tujuan Baru
															</label>
															<input type="text" class="form-control" name="tujuan" placeholder="Masukkan tujuan baru">
														</div>
														<button type="submit" class="btn btn-primary">
															Simpan Perubahan
														</button>
													</form>
													@endforeach
												</div>
											</div>
										</div>
									</div>
									<!-- Modal Hapus Tujuan -->
									@include('modals.hapustujuan')
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
				@foreach ($misi as $data)
				<p>
					<b>
						Misi {{ $loop->iteration }}.
					</b>
					{{ $data->misi }}
				</p>
			</td>
			<tr>
				<td>
					<div class="text-left">
						<button class="btn btn-outline-primary" style="margin-top: 10px;" data-toggle="modal"
						data-target="#tambahTujuanModal">
							<i class="fas fa-plus">
							</i>
							Tambah Tujuan Misi {{ $loop->iteration }}
						</button>
					</div>
					<!-- Modal -->
					@include('modals.tambahtujuan')
				</td>
			</tr>
			<tr>
				<td>
					<div class="panel-body table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>
										No.
									</th>
									<th>
										Indikator
									</th>
									<th>
										Kondisi Awal
									</th>
									<th>
										Target 2021
									</th>
									<th>
										Target 2022
									</th>
									<th>
										Target 2023
									</th>
									<th>
										Target 2024
									</th>
									<th>
										Target 2025
									</th>
									<th>
										Kondisi Akhir
									</th>
									<th>
										Satuan
									</th>
									<th>
										Opsi
									</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($indikator as $item)
								<tr>
									<td>
										{{ $loop->iteration }}
									</td>
									<td>
										{{ $item->indikator }}
									</td>
									<td>
										{{ $item->target_kondisi_awal }}
									</td>
									<td>
										{{ $item->target_tahun_2021 }}
									</td>
									<td>
										{{ $item->target_tahun_2023 }}
									</td>
									<td>
										{{ $item->target_tahun_2023 }}
									</td>
									<td>
										{{ $item->target_tahun_2024 }}
									</td>
									<td>
										{{ $item->target_tahun_2025 }}
									</td>
									<td>
										{{ $item->target_kondisi_akhir }}
									</td>
									<td>
										{{ $item->satuan_pengukuran }}
									</td>
									<td>
										<a data-tip="editIndikator" href="/indikator-update/{{ $item->id }}" class="text-warning"
										data-toggle="modal" data-target="#editIndikatorModal">
											<i class="fas fa-edit">
											</i>
										</a>
										@include('modals.editindikator')
										<a href="/hapus/indikator/{{ $item->id }}" data-tip="delete" class="text-danger">
											<i class="fas fa-trash">
											</i>
										</a>
									</td>
								</tr>
								@endforeach
								<!-- Tambahkan baris Indikator lainnya sesuai kebutuhan -->
							</tbody>
						</table>
					</div>
					<div class="text-right">
						<button class="btn btn-outline-primary" style="margin-top: 10px;" data-toggle="modal"
						data-target="#tambahIndikatorModal">
							<i class="fas fa-plus">
							</i>
							Tambah Indikator
						</button>
					</div>
					@endforeach
					<!-- Modal -->
					@include('modals.tambahindikator')
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