@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Makanan Alternative</h1>
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
                            <h3 class="card-title">Tambah Data Makanan Alternatif</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('makanan-alternative.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="kode_makanan" class="form-label">Kode Makanan</label>
                                    <input type="text" class="form-control" id="kode_makanan" name="kode_makanan">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_makanan" class="form-label">Nama Makanan</label>
                                    <input type="text" class="form-control" id="nama_makanan" name="nama_makanan">
                                </div>
                                <div class="mb-3">
                                    <label for="protein" class="form-label">Protein</label>
                                    <input type="text" class="form-control" id="protein" name="protein">
                                </div>
                                <div class="mb-3">
                                    <label for="lemak" class="form-label">Lemak</label>
                                    <input type="text" class="form-control" id="lemak" name="lemak">
                                </div>
                                <div class="mb-3">
                                    <label for="karbohidrat" class="form-label">Karbohidrat</label>
                                    <input type="text" class="form-control" id="karbohidrat" name="karbohidrat">
                                </div>
                                <div class="mb-3">
                                    <label for="id_kategori" class="form-label">Kategori</label>
                                    <select name="id_kategori" id="id_kategori" class="form-control">
                                        <option value="">-- Pilih Kategori --</option>
                                        @foreach ($data as $kategori)
                                            <option value="{{ $kategori->id }}">{{ $kategori->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <a href="{{ route('makanan-alternative.index') }}" class="btn btn-secondary">Kembali</a>
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

@endsection