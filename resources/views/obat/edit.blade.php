@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Edit Data Obat</h3>
                                </div>
                                <div class="panel-body">
                                   <form action="/obat/{{$obat->kodeobat}}/update" method="POST">
                                        {{csrf_field()}}
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Kode Obat</label>
                                            <input name="kodeobat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode" value="{{$obat->kodeobat}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Nama Obat</label>
                                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$obat->nama}}">
                                            </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Jenis Obat</label>
                                            <input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis" value="{{$obat->jenis}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Harga Obat</label>
                                            <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Harga" value="{{$obat->harga}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Stok Obat</label>
                                            <input name="stok" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok" value="{{$obat->stok}}">
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