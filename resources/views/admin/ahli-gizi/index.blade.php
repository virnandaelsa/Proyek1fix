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
                                    <th>NIP</th>
                                    <th>NAMA</th>
                                    <th>NOMOR TELEPON</th>
                                    <th>ALAMAT</th>
                                    <th>STATUS</th>
                                    <th>AKSI</th>
                                </thead>
                                <tbody>
                                    @foreach ( $data as $ahligizi)
                                    <tr>
                                        <td>{{ $ahligizi->nip }}</td>
                                        <td>{{ $ahligizi->nama }}</td>
                                        <td>{{ $ahligizi->no_tlp }}</td>
                                        <td>{{ $ahligizi->alamat }}</td>
                                        <td>
                                            @if ($ahligizi->status == "aktif") 
                                                <span class="badge bg-success">Aktif</span>
                                            @else
                                                <span class="badge bg-danger">Tidak Aktif</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('ahli-gizi.ubah-status-ahli-gizi', $ahligizi->nip) }}" class="btn btn-warning btn-sm text-bold">ubah</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    <!-- Tambahkan baris tabel lainnya di sini -->
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            {{ $data->links() }}
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