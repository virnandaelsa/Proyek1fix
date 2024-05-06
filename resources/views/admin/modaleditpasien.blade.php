<!-- edit_modal.blade.php -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form edit di sini -->
                <div class="form-group">
                    <label for="edit_nama">Nama Pasien:</label>
                    <input type="text" class="form-control" id="edit_nama" name="edit_nama">
                </div>
                <div class="form-group">
                    <label for="edit_nama">Nomor Telepon:</label>
                    <input type="text" class="form-control" id="edit_notlp" name="edit_notlp">
                </div>
                <div class="form-group">
                    <label for="kategori">Jenis Kelamin:</label>
                    <select class="form-control rounded-0" id="edit_riwayat" name="edit_riwayat">
                        <option value=""></option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kategori">Riwayat Penyakit:</label>
                    <select class="form-control rounded-0" id="edit_riwayat" name="edit_riwayat">
                        <option value=""></option>
                    </select>
                    <!-- Tambahkan form input lainnya sesuai kebutuhan -->
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary" id="simpanPerubahan">Simpan Perubahan</button>
            </div>
        </div>
    </div>
</div>
