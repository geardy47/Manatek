@extends('layouts.master')

@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Data Pegawai</h3>
                                    <div class="right">
                                        <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal" style="box-shadow: none;"><i class="lnr lnr-plus-circle"></i></button>
                                    </div>
                                                                            
                                </div>
                                <div class="panel-body no-padding">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID Pegawai</th>
                                                <th>Nama Pegawai</th>
                                                <th>Jabatan Pegawai</th>
                                                <th>Kontribusi</th>
                                                <th>Gaji</th>
                                                <th>AKSI</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($data_pegawai as $pegawai)
                                            <tr>
                                                <td>{{$pegawai->idpegawai}}</td>
                                                <td>{{$pegawai->nama}}</td>
                                                <td>{{$pegawai->jabatan}}</td>
                                                <td>{{$pegawai->kontribusi}}</td>
                                                <td>{{$pegawai->gaji}}</td>
                                                <td>
                                                    <a href="/pegawai/{{$pegawai->idpegawai}}/edit" class="btn btn-success btn-sm"><i class="lnr lnr-pencil"></i></a>
                                                    <a href="/pegawai/{{$pegawai->idpegawai}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin?')"><i class="lnr lnr-trash"></i></a>                    
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Pegawai</h5>
                </div>
                <div class="modal-body">
                    <form action="/pegawai/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">ID Pegawai</label>
                            <input name="idpegawai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pegawai</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Jabatan Pegawai</label>
                            <input name="jabatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kontribusi</label>
                            <input name="kontribusi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kontribusi">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Gaji</label>
                            <input name="gaji" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Gaji">
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