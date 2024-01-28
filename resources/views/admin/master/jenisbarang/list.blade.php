@extends('layout.layout')
@section('content')
        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">{{$title}}</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">{{$title}}</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">{{$title}}</h4>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate">Tambah Data</button>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Jenis Barang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no=1;
                                            @endphp
                                            @foreach ($data_jenis as $row)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$row->nama_jenis}}</td>
                                                <td>
                                                    <a href="#modalEdit{{$row->id}}" data-toggle="modal" class="btn btn-xs btn-primary"><i class="fa fa-edit"> Edit</i></a>
                                                    <a href="#modalHapus{{$row->id}}" data-toggle="modal" class="btn btn-xs btn-danger"><i class="fa fa-trash"> Hapus</i></a>
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
            <!-- #/ container -->
        </div>


                                    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">create {{$title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                            <form method="POST" action="/jenisbarang/store" >
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Jenis Barang</label>
                                                        <input type="text" class="form-control" name="nama_jenis" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>

                            @foreach ($data_jenis as $row)
                                    <div class="modal fade" id="modalEdit{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit {{$title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                            <form method="POST" action="/jenisbarang/update/{{$row->id}}" >
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Jenis Barang</label>
                                                        <input type="text" value="{{$row->nama_jenis}}" class="form-control" name="nama_jenis" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach

                            @foreach ($data_jenis as $row)
                                    <div class="modal fade" id="modalHapus{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Hapus {{$title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                            <form method="GET" action="/jenisbarang/destroy/{{$row->id}}" >
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <h5>apakah anda ingin menghapus data ini ?</h5>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
@endsection
