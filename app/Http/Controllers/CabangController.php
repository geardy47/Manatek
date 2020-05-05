<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function index()
    {
        $data_cabang = \App\Cabang::all();
        return view('cabang.index', ['data_cabang' => $data_cabang]);
    }

    public function create(Request $request)
    {
        \App\Cabang::create($request->all());
        return redirect('/cabang')->with('sukses','Data berhasil diinput');
    }

    public function edit($idcabang)
    {
        $cabang = \App\Cabang::find($idcabang);
        return view('cabang/edit',['cabang' => $cabang]);
    }

    public function update(Request $request,$idcabang)
    {
        $cabang = \App\Cabang::find($idcabang);
        $cabang->update($request->all());
        return redirect('/cabang')->with('sukses','Data berhasil diupdate');
    }

    public function delete($idcabang)
    {
        $cabang = \App\Cabang::find($idcabang);
        $cabang->delete();
        return redirect('/cabang')->with('sukses','Data berhasil dihapus');
    }
}
