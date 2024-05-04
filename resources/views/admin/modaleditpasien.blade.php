<!-- edit_modal.blade.php -->

<div class="modal fade" id="editModal">
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
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="edit_nama">Nama Pasien:</label>
                        <input type="text" class="form-control" id="edit_nama" name="edit_nama">
                    </div>
                    <div class="form-group">
                                <label for="kategori">Riwayat Penyakit</label>
                                <select class="form-control rounded-0" id="edit_riwayat" name="edit_riwayat">
                                    <option value=""></option>
                                </select>
                    <!-- Tambahkan form input lainnya sesuai kebutuhan -->
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </form>
            </div>
        </div>
    </div>
</div>
