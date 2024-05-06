<!-- Modal Tambah -->
<form method="POST" action="" enctype="multipart/form-data">                    
    {{ csrf_field() }}
    <div class="modal fade" id="modalTambahPasien">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Pasien</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class = "text-left">
                <div class="modal-body">
                    <!-- Form inputs -->
                    <div class="form-group">
                        <label for="nama">Nomor Pasien</label>
                        <input type="text" class="form-control rounded-0 " id="id" name="id" value="" placeholder="Nomor Pasien" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" class="form-control rounded-0 " id="nama" name="nama" value="" placeholder="Nama Pasien">
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Telepon</label>
                        <input type="text" class="form-control rounded-0 " id="notelepon" name="notelepon" value="" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Jenis Kelamin</label>
                            <select class="form-control rounded-0" id="jenkel" name="jenkel" placeholder="Jenis Kelamin">
                                 <option value="">Jenis Kelamin</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="kategori">Riwayat Penyakit</label>
                            <select class="form-control rounded-0" id="riwayat" name="riwayat" placeholder="Riwayat Penyakit">
                                <option value="">Riwayat Penyakit</option>
                            </select>
                    <div class="form-group">
                        <label for="kategori">Role</label>
                            <select class="form-control rounded-0" id="role" name="role" placeholder="Role" readonly>
                                <option value="">Pasien</option >
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
    <!-- /.modal -->
</form>
<!-- Modal Tambah End -->
