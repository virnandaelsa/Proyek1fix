<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Models\Makanan;

class MakananController extends Controller
{

    public function index()
    {
        $data = Makanan::paginate(10);
        return view('admin.makanan.index', compact('data'));
    }

    public function create()
    {
        $data = Kategori::orderBy('id', 'asc')->get();
        return view('admin.makanan.create', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new Makanan;
        $data->kode_makanan = $request->kode_makanan;
        $data->nama_makanan = $request->nama_makanan;
        $data->protein = $request->protein;
        $data->lemak = $request->lemak;
        $data->karbohidrat = $request->karbohidrat;
        $data->id_kategori = $request->id_kategori;
        $data->save();

        return redirect('/makanan');
    }

    public function edit($id)
    {
        $data = Makanan::find($id);
        $kategori = Kategori::orderBy('id', 'asc')->get();
        return view('admin.makanan.edit', compact('data', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $data = Makanan::find($id);
        $data->kode_makanan = $request->kode_makanan;
        $data->nama_makanan = $request->nama_makanan;
        $data->protein = $request->protein;
        $data->lemak = $request->lemak;
        $data->karbohidrat = $request->karbohidrat;
        $data->id_kategori = $request->id_kategori;
        $data->update();

        return redirect('/makanan');
    }

    public function destroy($id)
    {
        $data = Makanan::find($id);
        $data->delete();

        return redirect('/makanan');
    }
}
