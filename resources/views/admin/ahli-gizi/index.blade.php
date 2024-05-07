@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Ahli Gizi</h1>
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
                            <h3 class="card-title">Data Ahli Gizi</h3>
                            <a href="{{ route('ahli-gizi.create') }}" class="btn btn-primary ml-auto btn-sm"><i class="fas fa-plus fa-sm"></i> Tambah</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Table -->
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>NOMOR TELEPON</th>
                                    <th>ALAMAT</th>
                                    <th>AKSI</th>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $ahligizi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $ahligizi->nama }}</td>
                                        <td>{{ $ahligizi->no_tlp }}</td>
                                        <td>{{ $ahligizi->alamat }}</td>
                                        <td>
                                            <div class="">
                                                <!-- Button Edit -->
                                                <a href="{{ route('ahli-gizi.edit', $ahligizi->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>

                                                <!-- Button Hapus -->
                                                <form action="{{ route('ahli-gizi.destroy', $ahligizi->id) }}" method="POST" class="d-inline">
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