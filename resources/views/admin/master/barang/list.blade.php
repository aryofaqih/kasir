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
                                                <th>Nama Barang</th>
                                                <th>Jenis</th>
                                                <th>Stok</th>
                                                <th>Harga</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $no=1;
                                            @endphp
                                            @foreach ($data_barang as $row)
                                            <tr>
                                                <td>{{$no++}}</td>
                                                <td>{{$row->nama_barang}}</td>
                                                <td>{{$row->nama_jenis}}</td>
                                                <td>{{$row->stok}} Pcs</td>
                                                <td>Rp. {{number_format($row->harga)}}</td>
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
                                            <form method="POST" action="/barang/store" >
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nama Barang</label>
                                                        <input type="text" class="form-control" name="nama_barang" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Barang</label>
                                                        <select class="form-control" name="id_jenis" required>
                                                            <option value="" hidden>-- pilih jenis barang</option>
                                                            @foreach ($data_jenis as $row)
                                                            <option value="{{$row->id}}">{{$row->nama_jenis}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Stok Barang</label>
                                                        <input type="number" class="form-control" name="stok" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga Barang</label>
                                                        <input type="number" class="form-control" name="harga" required>
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

                            @foreach ($data_barang as $row)
                                    <div class="modal fade" id="modalEdit{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit {{$title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                            <form method="POST" action="/barang/update/{{$row->id}}" >
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nama Barang</label>
                                                        <input type="text" value="{{$row->nama_barang}}" class="form-control" name="nama_barang" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Jenis Barang</label>
                                                        <select class="form-control" name="id_jenis" required>
                                                            @foreach ($data_jenis as $row1)
                                                            <option @php if($row1->id==$row->id_jenis) echo "selected" ;@endphp value="{{$row1->id}}" >{{$row1->nama_jenis}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Stok Barang</label>
                                                        <input type="number" value="{{$row->stok}}" class="form-control" name="stok" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Harga Barang</label>
                                                        <input type="number" value="{{$row->harga}}" class="form-control" name="harga" required>
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

                            @foreach ($data_barang as $row)
                                    <div class="modal fade" id="modalHapus{{$row->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                        <div class="modal-dialog ">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Hapus {{$title}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                            <form method="GET" action="/barang/destroy/{{$row->id}}" >
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
