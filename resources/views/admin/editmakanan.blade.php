<!-- edit_modal.blade.php -->
<div class="modal fade" id="modalEdit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Data Makanan</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Isi form edit di sini -->
                <div class="form-group">
                    <label for="edit_nama">Nama Makanan:</label>
                    <input type="text" class="form-control" id="edit_nama" name="edit_namamakanan">
                </div>
                <div class="form-group">
                    <label for="edit_nama">Protein:</label>
                    <input type="text" class="form-control" id="edit_protein" name="edit_protein">
                </div>
                <div class="form-group">
                    <label for="edit_nama">Lemak:</label>
                    <input type="text" class="form-control" id="edit_lemak" name="edit_lemak">
                </div>
                <div class="form-group">
                    <label for="edit_nama">Karbohidrat:</label>
                    <input type="text" class="form-control" id="edit_karbohidrat" name="edit_karbohidrat">
                </div>
                <div class="form-group">
                    <label for="kategori">Kategori:</label>
                    <select class="form-control rounded-0" id="edit_kategori" name="edit_kategori">
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
