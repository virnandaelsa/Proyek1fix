<!-- Modal Tambah -->
<form method="POST" action="" enctype="multipart/form-data">                    
    {{ csrf_field() }}
    <div class="modal fade" id="modalTambahAhliGizi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data Ahli Gizi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="text-left">
                <div class="modal-body">
                    <!-- Form inputs -->
                    <div class="form-group">
                        <label for="nama">ID</label>
                        <input type="text" class="form-control rounded-0 " id="id" name="id" value="" placeholder="ID Ahli Gizi" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control rounded-0 " id="nama" name="nama" value="" placeholder="Nama Ahli Gizi">
                    </div>
                    
                    <div class="form-group">
                        <label for="nama">Telepon</label>
                        <input type="text" class="form-control rounded-0 " id="notelepon" name="notelepon" value="" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group">
                        <label for="nama">Alamat</label>
                        <input type="text" class="form-control rounded-0 " id="alamat" name="alamat" value="" placeholder="Alamat Ahli Gizi">
                    </div>
                    <div class="form-group">
                        <label for="kategori">Role</label>
                            <select class="form-control rounded-0" id="role" name="role" placeholder="Role" readonly>
                                <option value="">Ahli Gizi</option >
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
