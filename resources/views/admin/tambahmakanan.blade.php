<!-- Modal Tambah -->
<form method="POST" action="" enctype="multipart/form-data">                    
    {{ csrf_field() }}
    <div class="modal fade" id="modalTambahMakanan">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center">Tambah Data Makanan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="text-left">
                <div class="modal-body">
                    <!-- Form inputs -->
                    <div class="form-group">
                        <label for="nama">Kode</label>
                        <input type="text" class="form-control rounded-0 " id="id_makanan" name="id_makanan" value="" placeholder="Kode Makanan" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Makanan</label>
                        <input type="text" class="form-control rounded-0 " id="nama_makanan" name="nama_makanan" value="" placeholder="Nama Makanan">
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Protein</label>
                        <input type="text" class="form-control rounded-0 " id="protein" name="protein" value="" placeholder="Protein">
                    </div>
                    <div class="form-group">
                        <label for="nama">Lemak</label>
                        <input type="text" class="form-control rounded-0 " id="lemak" name="lemak" value="" placeholder="Lemak">
                    </div>
                    <div class="form-group">
                        <label for="nama">Karbohidrat</label>
                        <input type="text" class="form-control rounded-0 " id="karbohidrat" name="karbohidrat" value="" placeholder="Karbohidrat">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                            <select class="form-control rounded-0" id="role" name="role" placeholder="Role">
                                <option value=""></option >
                            </select>
                    
                        </div>
                    <!-- Add other form inputs here -->
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
                
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    </div>
    </form>
    <!-- /.modal -->
<!-- Modal Tambah End -->
