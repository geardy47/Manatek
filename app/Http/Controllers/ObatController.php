<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $data_obat = \App\Obat::all();
        return view('obat.index', ['data_obat' => $data_obat]);
    }

    public function create(Request $request)
    {
        \App\Obat::create($request->all());
        return redirect('/obat')->with('sukses','Data berhasil diinput');
    }

    public function edit($kodeobat)
    {
        $obat = \App\Obat::find($kodeobat);
        return view('obat/edit',['obat' => $obat]);
    }

    public function update(Request $request,$kodeobat)
    {
        $obat = \App\Obat::find($kodeobat);
        $obat->update($request->all());
        return redirect('/obat')->with('sukses','Data berhasil diupdate');
    }

    public function delete($kodeobat)
    {
        $obat = \App\Obat::find($kodeobat);
        $obat->delete();
        return redirect('/obat')->with('sukses','Data berhasil dihapus');
    }
}
