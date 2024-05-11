<?php

namespace App\Http\Controllers;

use App\Models\AhliGizi;
use Illuminate\Http\Request;

class AhliGiziController extends Controller
{
    public function index()
    {
        $data = AhliGizi::all();
        return view('admin.ahli-gizi.index', compact('data'));
    }

    public function create()
    {
        return view('admin.ahli-gizi.create');
    }

    public function store(Request $request)
    {
        $data = new AhliGizi;
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect('/ahli-gizi');

    }

    public function edit($id)
    {
        $data = AhliGizi::find($id);
        return view('admin.ahli-gizi.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = AhliGizi::find($id);
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->alamat = $request->alamat;
        $data->update();

        return redirect('/ahli-gizi');
    }

    public function destroy($id)
    {
        $data = AhliGizi::find($id);
        $data->delete();

        return redirect('/ahli-gizi');
    }


}
