<?php

namespace App\Http\Controllers;

use App\Models\AhliGizi;
use App\Models\Konsul;
use App\Models\Pasien;
use App\Models\Makanan;
use Illuminate\Http\Request;

class KonsulController extends Controller
{

    public function index()
    {
        $data = Konsul::all();
        return view('admin.konsultasi.index', compact('data'));
    }

    public function create()
    {
        $pasien = Pasien::orderBy('id', 'asc')->get();
        $ahligizi = AhliGizi::orderBy('id', 'asc')->get();
        $makanan = Makanan::orderBy('kode_makanan', 'asc')->get();
        return view('admin.konsultasi.create', compact('pasien', 'ahligizi', 'makanan'));
    }

    public function store(Request $request)
    {
        $data = new Konsul;
        $data->id_pasien = $request->id_pasien;
        $data->id_ahligizi = $request->id_ahligizi;
        $data->kode_makanan = $request->kode_makanan;
        $data->tgl_konsultasi = $request->tgl_konsultasi;
        $data->save();

        return redirect('/konsul');
    }

    public function edit($id)
    {
        $data = Konsul::find($id);
        $pasien = Pasien::orderBy('id', 'asc')->get();
        $ahligizi = AhliGizi::orderBy('id', 'asc')->get();
        $makanan = Makanan::orderBy('kode_makanan', 'asc')->get();
        return view('admin.konsultasi.edit', compact('data', 'pasien', 'ahligizi', 'makanan'));
    }

    public function update(Request $request, $id)
    {
        $data = Konsul::find($id);
        $data->id_pasien = $request->id_pasien;
        $data->id_ahligizi = $request->id_ahligizi;
        $data->kode_makanan = $request->kode_makanan;
        $data->tgl_konsultasi = $request->tgl_konsultasi;
        $data->update();

        return redirect('/konsul');
    }

    public function destroy($id)
    {
        $data = Konsul::find($id);
        $data->delete();

        return redirect('/konsul');
    }
}
