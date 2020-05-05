@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Obat</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="box-shadow: none;"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                                                                            
                                </div>
                                <div class="panel-body no-padding">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Kode Obat</th>
                                                <th>Nama Obat</th>
                                                <th>Jenis Obat</th>
                                                <th>Harga Obat</th>
                                                <th>Stok Obat</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($data_obat as $obat)
                                            <tr>
                                                <td>{{$obat->kodeobat}}</td>
                                                <td>{{$obat->nama}}</td>
                                                <td>{{$obat->jenis}}</td>
                                                <td>{{$obat->harga}}</td>
                                                <td>{{$obat->stok}}</td>
                                                <td>
                                                    <a href="/obat/{{$obat->kodeobat}}/edit" class="btn btn-success btn-sm"><i class="lnr lnr-pencil"></i></a>
                                                    <a href="/obat/{{$obat->kodeobat}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')"><i class="lnr lnr-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="right">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Obat</h5>
                </div>
                <div class="modal-body">
                    <form action="/obat/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kode Obat</label>
                            <input name="kodeobat" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Obat</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jenis Obat</label>
                            <input name="jenis" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jenis">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Harga Obat</label>
                            <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="harga">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Stok Obat</label>
                            <input name="stok" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Stok">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@stop