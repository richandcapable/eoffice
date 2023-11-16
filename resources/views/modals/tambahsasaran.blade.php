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
                        <label for="misi">KODE</label><br>
                        <input name="kode" placeholder="Masukkan Kode" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <select class="form-control" name="misi">
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