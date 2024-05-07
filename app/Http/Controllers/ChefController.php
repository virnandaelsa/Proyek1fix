<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;

class ChefController extends Controller
{
    public function index()
    {
        $data = Chef::all();
        return view('admin.chef.index', compact('data'));
    }

    public function create()
    {
        return view('admin.chef.create');
    }

    public function store(Request $request)
    {
        $data = new Chef;
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->alamat = $request->alamat;
        $data->save();

        return redirect('/chef');

    }

    public function edit($id)
    {
        $data = Chef::find($id);
        return view('admin.chef.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Chef::find($id);
        $data->nama = $request->nama;
        $data->no_tlp = $request->no_tlp;
        $data->alamat = $request->alamat;
        $data->update();

        return redirect('/chef');
    }

    public function destroy($id)
    {
        $data = Chef::find($id);
        $data->delete();

        return redirect('/chef');
    }
}
