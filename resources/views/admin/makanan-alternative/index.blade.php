@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Makanan</h1>
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
                            <h3 class="card-title">Data Makanan Alternatif</h3>
                            <a href="{{ route('makanan-alternative.create') }}" class="btn btn-primary ml-auto btn-sm"><i class="fas fa-plus fa-sm"></i> Tambah</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Table -->
                            <table class="table table-bordered">
                                <thead>
                                    <th>NO</th>
                                    <th>KODE MAKANAN</th>
                                    <th>NAMA MAKANAN</th>
                                    <th>PROTEIN</th>
                                    <th>LEMAK</th>
                                    <th>KARBOHIDRAT</th>
                                    <th>KATEGORI</th>
                                    <th>AKSI</th>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $makanan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $makanan->kode_makanan }}</td>
                                        <td>{{ $makanan->nama_makanan }}</td>
                                        <td>{{ $makanan->protein }} %</td>
                                        <td>{{ $makanan->lemak }} %</td>
                                        <td>{{ $makanan->karbohidrat }} %</td>
                                        <td>{{ $makanan->kategori->nama_kategori }}</td>
                                        <td>
                                            <div class="">
                                                <!-- Button Edit -->
                                                <a href="{{ route('makanan.edit', $makanan->kode_makanan) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>

                                                <!-- Button Hapus -->
                                                <form action="{{ route('makanan.destroy', $makanan->kode_makanan) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    <button class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- Tambahkan baris tabel lainnya di sini -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $data->links('pagination::bootstrap-5') }}
                        </div>
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