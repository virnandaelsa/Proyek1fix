<!-- Modal Tambah -->
<form method="POST" action="" enctype="multipart/form-data">                    
    {{ csrf_field() }}
    <div class="modal fade" id="modalTambah">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Konsultasi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form inputs -->
                    <div class="form-group">
                        <label for="nama">Nomor Konsultasi</label>
                        <input type="text" class="form-control rounded-0 " id="nokonsul" name="nokonsul" value="" placeholder="Nomor Konsultasi">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nomor Pasien</label>
                        <input type="text" class="form-control rounded-0 " id="nopasien" name="nopasien" value="" placeholder="Nomor Pasien">
                    </div>
                    <div class="form-group">
                        <label for="nama">Id Ahli Gizi</label>
                        <input type="text" class="form-control rounded-0 " id="id_ahligizi" name="id_ahligizi" value="" placeholder="Id Ahli Gizi">
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Kode Makanan</label>
                        <input type="text" class="form-control rounded-0 " id="kode_makana" name="kode_makanan" value="" placeholder="Kode Makanan">
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control">
                    </div>
                    
                        </div>
                    <!-- Add other form inputs here -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
</form>
<!-- Modal Tambah End -->
