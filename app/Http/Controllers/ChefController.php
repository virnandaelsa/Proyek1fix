<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;

class ChefController extends Controller
{
    public function index()
    {
        $data = Chef::paginate(10);
        return view('admin.chef.index', compact('data'));
    }

    public function create()
    {
        return view('admin.chef.create');
    }

    public function store(Request $request)
    {
        $data = new Chef;
        $data->nip = $request->nip;
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect('/chef');

    }

    public function ubahStatus($id)
    {
        $data = Chef::find($id);
        if ($data) {
            $data->status = $data->status == 'aktif' ? 'tidak aktif' : 'aktif';
            $data->update();
        }
        return redirect('/chef');
    }
}
