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
                            <h3 class="card-title">Tambah Data Konsultasi</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('konsul.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="id_pasien" class="form-label">Nama Pasien</label>
                                    <select name="id_pasien" id="id_pasien" class="form-control">
                                        <option value="">-- Pilih Pasien --</option>
                                        @foreach ($pasien as $data_pasien)
                                            <option value="{{ $data_pasien->id }}" {{ old('id', $selected_pasien ?? '') == $data_pasien->id ? 'selected' : '' }}>
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
                                            <option value="{{ $data_ahligizi->id }}" {{ old('id', $selected_ahligizi ?? '') == $data_ahligizi->id ? 'selected' : '' }}>
                                                {{ $data_ahligizi->nama }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="kode_makanan" class="form-label">Makanan</label>
                                    <select name="kode_makanan" id="kode_makanan" class="form-control">
                                        <option value="">-- Pilih Makanan --</option>
                                        @foreach ($makanan as $data_makanan)
                                            <option value="{{ $data_makanan->kode_makanan }}" {{ old('kode_makanan', $selected_makanan ?? '') == $data_makanan->kode_makanan ? 'selected' : '' }}>
                                                {{ $data_makanan->nama_makanan }} || Protein : {{ $data_makanan->protein }} || Lemak : {{ $data_makanan->lemak }} || Karbohidrat : {{ $data_makanan->karbohidrat }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="mt-2">
                                        <button type="submit" formaction="{{ route('konsul.cek-protein')}}" class="btn btn-info">Cek Protein</button>
                                        <button type="submit" formaction="{{ route('konsul.cek-lemak')}}" class="btn btn-success">Cek Lemak</button>
                                        <button type="submit" formaction="{{ route('konsul.cek-karbohidrat')}}" class="btn btn-warning">Cek Karbohidrat</button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="kode_makanan_alternative" class="form-label">Makanan Alternatif</label>
                                    <table class="table">
                                        @foreach ( $kode_makanan_alternative as $makanan )
                                            <tr>
                                                <td><input type="checkbox" name="kode_makanan_alternative[]" value="{{ $makanan['kode_makanan'] }}" 
                                                    @if (is_array($selected_makanan_alternative) && in_array($makanan->kode_makanan, $selected_makanan_alternative))
                                                        checked
                                                    @endif
                                                    >
                                                </td>
                                                <td>{{ $makanan->nama_makanan }}</td>
                                                <td>Protein : {{$makanan->protein }}</td>
                                                <td>Lemak : {{$makanan->lemak }}</td>
                                                <td>Karbohidrat : {{$makanan->karbohidrat }}</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <div class="mb-3">
                                    <label for="tgl_konsultasi" class="form-label">Tanggal Konsultasi</label>
                                    <input type="date" class="form-control" id="tgl_konsultasi" name="tgl_konsultasi" value="{{ old('tgl_konsultasi', $tgl_konsultasi) }}">
                                </div>
                                <a href="{{ route('konsul.index') }}" class="btn btn-secondary">Kembali</a>
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