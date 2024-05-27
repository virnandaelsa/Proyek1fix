<?php

namespace App\Http\Controllers;

use App\Models\MakananAlternative;
use App\Models\Kategori;
use Illuminate\Http\Request;

class MakananAlternativeController extends Controller
{
    public function index()
    {
        $data = MakananAlternative::paginate(10);
        return view('admin.makanan-alternative.index', compact('data'));
    }

    public function create()
    {
        $data = Kategori::orderBy('id', 'asc')->get();
        return view('admin.makanan-alternative.create', compact('data'));
    }

    public function store(Request $request)
    {
        $data = new MakananAlternative;
        $data->kode_makanan = $request->kode_makanan;
        $data->nama_makanan = $request->nama_makanan;
        $data->protein = $request->protein;
        $data->lemak = $request->lemak;
        $data->karbohidrat = $request->karbohidrat;
        $data->id_kategori = $request->id_kategori;
        $data->save();

        return redirect('/makanan-alternative');
    }

    public function edit($id)
    {
        $data = MakananAlternative::find($id);
        $kategori = Kategori::orderBy('id', 'asc')->get();
        return view('admin.makanan-alternative.edit', compact('data', 'kategori'));
    }

    public function update(Request $request, $id)
    {
        $data = MakananAlternative::find($id);
        $data->kode_makanan = $request->kode_makanan;
        $data->nama_makanan = $request->nama_makanan;
        $data->protein = $request->protein;
        $data->lemak = $request->lemak;
        $data->karbohidrat = $request->karbohidrat;
        $data->id_kategori = $request->id_kategori;
        $data->update();

        return redirect('/makanan-alternative');
    }

    public function destroy($id)
    {
        $data = MakananAlternative::find($id);
        $data->delete();

        return redirect('/makanan-alternative');
    }
}
