@extends('layouts.master')

@section('content')
<div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Cabang</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="box-shadow: none;"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                                                                            
                                </div>
                                <div class="panel-body no-padding">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID Cabang</th>
                                                <th>Nama Cabang</th>
                                                <th>Alamat</th>
                                                <th>Nomor Telepon</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($data_cabang as $cabang)
                                            <tr>
                                                <td>{{$cabang->idcabang}}</td>
                                                <td>{{$cabang->nama}}</td>
                                                <td>{{$cabang->kota}}</td>
                                                <td>{{$cabang->nomortelepon}}</td>
                                                <td>
                                                    <a href="/cabang/{{$cabang->idcabang}}/edit" class="btn btn-success btn-sm"><i class="lnr lnr-pencil"></i></a>
                                                    <a href="/cabang/{{$cabang->idcabang}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')"><i class="lnr lnr-trash"></i></a>
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


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <div class="right">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Cabang</h5>
                </div>
                <div class="modal-body">
                    <form action="/cabang/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Cabang</label>
                            <input name="idcabang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Cabang">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kota</label>
                            <input name="kota" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nomor Telepon</label>
                            <input name="nomortelepon" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nomor Telepon">
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