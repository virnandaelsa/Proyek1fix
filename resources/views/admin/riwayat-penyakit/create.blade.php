@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Riwayat Penyakit Pasien</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mt-3">
                        <div class="card-header d-flex align-items-center">
                            <h3 class="card-title">Tambah Data Riwayat Penyakit Pasien</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('riwayat-penyakit.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nomor_pasien" class="form-label">Nomor Pasien</label>
                                    <input type="text" class="form-control" id="nomor_pasien" name="nomor_pasien">
                                </div>
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama Pasien</label>
                                    <input type="text" class="form-control" id="nama" name="nama" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="jenkel" class="form-label">Jenis Kelamin</label>
                                    <input type="text" class="form-control" id="jenkel" name="jenkel" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="penyakit" class="form-label">Penyakit</label>
                                    <input type="text" class="form-control" id="penyakit" name="penyakit">
                                </div>
                                <a href="" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#nomor_pasien').on('input', function() {
            var nomor_pasien = $(this).val();
            if (nomor_pasien) {
                $.ajax({
                    url: '/pasien/' + nomor_pasien,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        if (data) {
                            $('#nama').val(data.nama);
                            $('#jenkel').val(data.jk);  // Perbarui ini untuk menggunakan kolom 'jk'
                        } else {
                            $('#nama').val('');
                            $('#jenkel').val('');
                        }
                    },
                    error: function() {
                        $('#nama').val('');
                        $('#jenkel').val('');
                    }
                });
            } else {
                $('#nama').val('');
                $('#jenkel').val('');
            }
        });
    });
</script>

@endsection
