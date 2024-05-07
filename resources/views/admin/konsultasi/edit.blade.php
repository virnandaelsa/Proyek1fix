@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Konsultasi</h1>
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
                            <h3 class="card-title">Edit Data Konsultasi</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('konsul.update', $data->id) }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="id_pasien" class="form-label">Nama Pasien</label>
                                    <select name="id_pasien" id="id_pasien" class="form-control">
                                        <option value="">-- Pilih Pasien --</option>
                                        @foreach ($pasien as $data_pasien)
                                            <option value="{{ $data_pasien->id }}" {{ $data->id_pasien == $data_pasien->id ? 'selected' : '' }}>
                                                {{ $data_pasien->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="id_ahligizi" class="form-label">Nama Ahli Gizi</label>
                                    <select name="id_ahligizi" id="id_ahligizi" class="form-control">
                                        <option value="">-- Pilih Ahli Gizi --</option>
                                        @foreach ($ahligizi as $data_ahligizi)
                                            <option value="{{ $data_ahligizi->id }}" {{ $data->id_ahligizi == $data_ahligizi->id ? 'selected' : '' }}>
                                                {{ $data_ahligizi->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kode_makanan" class="form-label">Nama Makanan</label>
                                    <select name="kode_makanan" id="kode_makanan" class="form-control">
                                        <option value="">-- Pilih Makanan --</option>
                                        @foreach ($makanan as $data_makanan)
                                            <option value="{{ $data_makanan->kode_makanan }}" {{ $data->kode_makanan == $data_makanan->kode_makanan ? 'selected' : '' }}>
                                                {{ $data_makanan->nama_makanan }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_konsultasi" class="form-label">Tanggal Konsultasi</label>
                                    <input type="date" class="form-control" id="tgl_konsultasi" name="tgl_konsultasi" value="{{ $data->tgl_konsultasi }}">
                                </div>
                                <a href="{{ route('konsul.index') }}" class="btn btn-secondary">Kembali</a>
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