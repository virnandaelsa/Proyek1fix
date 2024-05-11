@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Pasien</h1>
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
                            <h3 class="card-title">Edit Data Pasien</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('pasien.update', $data->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $data->nama }}">
                                </div>
                                <div class="mb-3">
                                    <label for="no_tlp" class="form-label">Nomor Telepon</label>
                                    <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{ $data->no_tlp }}">
                                </div>
                                <div class="mb-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat">{{ $data->alamat }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="jk" class="form-label">Jenis Kelamin</label>
                                    <select class="form-control" id="jk" name="jk">
                                        <option value="">-- Pilih Jenis Kelamin --</option>
                                        <option value="Laki-laki" {{ $data->jk == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="Perempuan" {{ $data->jk == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="riwayat_penyakit" class="form-label">Riwayat Penyakit</label>
                                    <select class="form-control" id="riwayat_penyakit" name="riwayat_penyakit">
                                        <option value="">-- Pilih Riwayat Penyakit --</option>
                                        @foreach ($riwayat as $riwayat_penyakit)
                                            <option value="{{ $riwayat_penyakit->id }}" {{$data->id_riwayat == $riwayat_penyakit->id ? 'selected' : ''}}>
                                                {{ $riwayat_penyakit->nama_penyakit }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary">Edit</button>
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

@endsection