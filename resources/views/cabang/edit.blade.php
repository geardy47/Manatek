@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edit Data Cabang</h3>
                                </div>
                                <div class="panel-body">
                                   <form action="/cabang/{{$cabang->idcabang}}/update" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">ID Cabang</label>
                                            <input name="idcabang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Cabang" value="{{$cabang->idcabang}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama</label>
                                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$cabang->nama}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kota</label>
                                            <input name="kota" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kota" value="{{$cabang->kota}}">
                                        </div>
                                        <div class="form-group">
                                                <label for="exampleInputEmail1">Nomor Telepon</label>
                                                <input name="nomortelepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Telepon" value="{{$cabang->nomortelepon}}">
                                        </div>
                                        <button type="update" class="btn btn-warning">Submit</button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop