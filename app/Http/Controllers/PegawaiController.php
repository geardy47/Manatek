<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data_pegawai = \App\Pegawai::all();
        return view('pegawai.index', ['data_pegawai' => $data_pegawai]);
    }

    public function create(Request $request)
    {
        \App\Pegawai::create($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil diinput');
    }

    public function edit($idpegawai)
    {
        $pegawai = \App\Pegawai::find($idpegawai);
        return view('pegawai/edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request,$idpegawai)
    {
        $pegawai = \App\Pegawai::find($idpegawai);
        $pegawai->update($request->all());
        return redirect('/pegawai')->with('sukses','Data berhasil diupdate');
    }

    public function delete($idpegawai)
    {
        $pegawai = \App\Pegawai::find($idpegawai);
        $pegawai->delete();
        return redirect('/pegawai')->with('sukses','Data berhasil dihapus');
    }
}
