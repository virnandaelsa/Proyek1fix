<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;
use App\Models\RiwayatPenyakit;

class PasienController extends Controller
{
    public function index()
    {
        $data = Pasien::all();
        return view('admin.pasien.index', compact('data'));
    }

    public function create()
    {
        $data = RiwayatPenyakit::orderBy('id', 'asc')->get();
        return view('admin.pasien.create', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Pasien;
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->alamat = $request->alamat;
        $data->jk = $request->jk;
        $data->id_riwayat = $request->riwayat_penyakit;
        $data->save();

        return redirect('/pasien');
    }

    public function edit($id)
    {
        $data = Pasien::find($id);
        $riwayat = RiwayatPenyakit::orderBy('id', 'asc')->get();

        return view('admin.pasien.edit', compact('data', 'riwayat'));
    }

    public function update(Request $request, $id)
    {
        $data = Pasien::find($id);
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->alamat = $request->alamat;
        $data->jk = $request->jk;
        $data->id_riwayat = $request->riwayat_penyakit;
        $data->update();

        return redirect('/pasien');
    }

    public function destroy($id)
    {
        $data = Pasien::find($id);
        $data->delete();

        return redirect('/pasien');
    }

}
