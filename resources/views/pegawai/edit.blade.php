@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edit Data Pegawai</h3>
                                </div>
                                <div class="panel-body">
                                   <form action="/pegawai/{{$pegawai->idpegawai}}/update" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID Pegawai</label>
                                            <input name="idpegawai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID" value="{{$pegawai->idpegawai}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Pegawai</label>
                                                <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$pegawai->nama}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Jabatan Pegawai</label>
                                                <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan" value="{{$pegawai->jabatan}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Kontribusi</label>
                                                <input name="kontribusi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kontribusi" value="{{$pegawai->kontribusi}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Gaji</label>
                                                <input name="gaji" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gaji" value="{{$pegawai->gaji}}">
                                            </div>
                                        <button type="update" class="btn btn-success">Submit</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop