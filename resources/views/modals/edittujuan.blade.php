    <div class="modal fade" id="editTujuan" tabindex="-1" role="dialog" aria-labelledby="editTujuanModalLabel"
        aria-hidden="true">
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
                            <input type="text" class="form-control" name="tujuan"
                                placeholder="Masukkan tujuan baru">
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan
                            Perubahan</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
