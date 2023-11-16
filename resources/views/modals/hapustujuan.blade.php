<div class="modal fade" id="hapusTujuan" tabindex="-1" role="dialog"
aria-labelledby="hapusTujuanModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="hapusTujuanModalLabel">Hapus Tujuan</h5>
            <button type="button" class="close" data-dismiss="modal"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <!-- Isi pesan konfirmasi penghapusan -->
            <p>Anda yakin ingin menghapus tujuan ini?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary"
                data-dismiss="modal">Batal</button>
            <!-- Tombol konfirmasi penghapusan -->
            @foreach ($tujuan as $data)
                <form action="/hapus-tujuan/{{ $data->id }}" method="POST"
                    enctype="multipart/form-data">
                    @method('DELETE')
                    <!-- Menggunakan DELETE method untuk menghapus data -->
                    @csrf
                    <button type="submit" class="btn btn-danger"
                        id="konfirmasiHapusTujuan">Hapus</button>
                </form>
            @endforeach
        </div>
    </div>
</div>
</div>