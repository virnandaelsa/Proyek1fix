<?php

namespace App\Http\Controllers;

use App\Models\AhliGizi;
use App\Models\Konsul;
use App\Models\Pasien;
use App\Models\Makanan;
use App\Models\MakananAlternative;
use Illuminate\Http\Request;

class KonsulController extends Controller
{

    public function index()
    {
        $data = Konsul::paginate(10);

        $data->each(function ($item) {
            $kode_makanan_alternative = explode(',', $item->kode_makanan_alternative);
            $makanan_alternative = MakananAlternative::whereIn('kode_makanan', $kode_makanan_alternative)->pluck('nama_makanan')->toArray();
            
            $item->makanan_alternative = collect($makanan_alternative)->map(function ($makanan, $key) {
                return "Makanan " . ($key + 1) . ": " . $makanan;
            })->implode('<br>');
        });

        return view('admin.konsultasi.index', compact('data'));
    }

    public function create()
    {
        $pasien = Pasien::orderBy('id', 'asc')->get();
        $ahligizi = AhliGizi::orderBy('id', 'asc')->get();
        $makanan = Makanan::orderBy('kode_makanan', 'asc')->get();
        $kode_makanan_alternative = MakananAlternative::orderBy('kode_makanan', 'asc')->get();
        return view('admin.konsultasi.create', compact('pasien', 'ahligizi', 'makanan', 'kode_makanan_alternative'))
            ->with('selected_makanan', old('kode_makanan'))
            ->with('selected_makanan_alternative', old('kode_makanan_alternative'))
            ->with('selected_pasien', old('id_pasien'))
            ->with('selected_ahligizi', old('id_ahligizi'))
            ->with('tgl_konsultasi', old('tgl_konsultasi'));
    }

    public function cekProtein(Request $request)
    {
        $id_pasien     = $request->id_pasien;
        $id_ahligizi   = $request->id_ahligizi;
        $kode_makanan  = $request->kode_makanan;
        $makanan_alternative = $request->kode_makanan_alternative ?? [];
        $tgl_kosultasi = $request->tgl_konsultasi;
        $protein_makanan = Makanan::where('kode_makanan', $kode_makanan)->pluck('protein');
        $kode_makanan_alternative = MakananAlternative::where('protein', '<', $protein_makanan)
            ->orderBy('kode_makanan', 'asc')
            ->get();

        $pasien = Pasien::orderBy('id', 'asc')->get();
        $ahligizi = AhliGizi::orderBy('id', 'asc')->get();
        $makanan = Makanan::orderBy('kode_makanan', 'asc')->get();

        return view('admin.konsultasi.create', compact('pasien', 'ahligizi', 'makanan', 'kode_makanan_alternative'))
            ->with('selected_makanan', $kode_makanan)
            ->with('selected_makanan_alternative', $makanan_alternative)
            ->with('selected_pasien', $id_pasien)
            ->with('selected_ahligizi', $id_ahligizi)
            ->with('tgl_konsultasi', old('tgl_konsultasi', $tgl_kosultasi));
    }

    public function cekKarbohidrat(Request $request)
    {
        $id_pasien     = $request->id_pasien;
        $id_ahligizi   = $request->id_ahligizi;
        $kode_makanan  = $request->kode_makanan;
        $makanan_alternative = $request->kode_makanan_alternative ?? [];
        $tgl_kosultasi = $request->tgl_konsultasi;
        $karbo_makanan = Makanan::where('kode_makanan', $kode_makanan)->pluck('karbohidrat');
        $kode_makanan_alternative = MakananAlternative::where('karbohidrat', '<', $karbo_makanan)
            ->orderBy('kode_makanan', 'asc')
            ->get();

        $pasien = Pasien::orderBy('id', 'asc')->get();
        $ahligizi = AhliGizi::orderBy('id', 'asc')->get();
        $makanan = Makanan::orderBy('kode_makanan', 'asc')->get();

        return view('admin.konsultasi.create', compact('pasien', 'ahligizi', 'makanan', 'kode_makanan_alternative'))
            ->with('selected_makanan', $kode_makanan)
            ->with('selected_makanan_alternative', $makanan_alternative)
            ->with('selected_pasien', $id_pasien)
            ->with('selected_ahligizi', $id_ahligizi)
            ->with('tgl_konsultasi', old('tgl_konsultasi', $tgl_kosultasi));
    }

    public function cekLemak(Request $request)
    {
        $id_pasien     = $request->id_pasien;
        $id_ahligizi   = $request->id_ahligizi;
        $kode_makanan  = $request->kode_makanan;
        $makanan_alternative = $request->kode_makanan_alternative ?? [];
        $tgl_kosultasi = $request->tgl_konsultasi;
        $lemak_makanan = Makanan::where('kode_makanan', $kode_makanan)->pluck('lemak');
        $kode_makanan_alternative = MakananAlternative::where('lemak', '<', $lemak_makanan)
            ->orderBy('kode_makanan', 'asc')
            ->get();

        $pasien = Pasien::orderBy('id', 'asc')->get();
        $ahligizi = AhliGizi::orderBy('id', 'asc')->get();
        $makanan = Makanan::orderBy('kode_makanan', 'asc')->get();

        return view('admin.konsultasi.create', compact('pasien', 'ahligizi', 'makanan', 'kode_makanan_alternative'))
            ->with('selected_makanan', $kode_makanan)
            ->with('selected_makanan_alternative', $makanan_alternative)
            ->with('selected_pasien', $id_pasien)
            ->with('selected_ahligizi', $id_ahligizi)
            ->with('tgl_konsultasi', old('tgl_konsultasi', $tgl_kosultasi));
    }

    public function store(Request $request)
    {
        $data = new Konsul;
        $data->id_pasien = $request->id_pasien;
        $data->id_ahligizi = $request->id_ahligizi;
        $data->kode_makanan = $request->kode_makanan;
        $data->kode_makanan_alternative = implode(',', $request->kode_makanan_alternative);
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
        $kode_makanan_alternative = MakananAlternative::orderBy('kode_makanan', 'asc')->get();
        $makanan_alternative_array = explode(',', $data->kode_makanan_alternative);
        
        return view('admin.konsultasi.edit', compact('data', 'pasien', 'ahligizi', 'makanan', 'kode_makanan_alternative', 'makanan_alternative_array' ));
    }

    public function update(Request $request, $id)
    {
        $data = Konsul::find($id);
        $data->id_pasien = $request->id_pasien;
        $data->id_ahligizi = $request->id_ahligizi;
        $data->kode_makanan = $request->kode_makanan;
        $data->kode_makanan_alternative = implode(',', $request->kode_makanan_alternative);
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
