<div class="modal fade" id="editVisiModal" tabindex="-1" role="dialog"
                                                            aria-labelledby="editVisiModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editVisiModalLabel">Ubah Visi
                                                                        </h5>
                                                                        <button type="button" class="close" data-dismiss="modal"
                                                                            aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- Isi form untuk mengubah visi -->
                                                                        <form action="/visimisi-update/1" method="POST"
                                                                            enctype="multipart/form-data">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <div class="form-group">
                                                                                <label for="newVisi">Visi Baru</label>
                                                                                <input type="text" class="form-control"
                                                                                    name="visi" placeholder="Masukkan visi baru">
                                                                            </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Tutup</button>
                                                                        <button type="submit" class="btn btn-primary">Simpan
                                                                            Perubahan</button>
                                                                    </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>