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
                                </div>
                        @foreach ( $data_diskon as $d)
                        <form method="POST" action="/setdiskon/update/{{$d->id}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Total Belanja</label>
                                    <input type="number" value="{{$d->total_belanja}}" class="form-control" name="total_belanja" required>
                                </div>
                                <div class="form-group">
                                    <label>Diskon</label>
                                    <input type="number" value="{{$d->diskon}}" class="form-control" name="diskon" required>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i>Save Changes</button>
                                </div>
                            </div>
                        </form>
                        @endforeach

                        </div>
                    </div>
                </div>
            </div>
            <!-- #/ container -->
        </div>




                            @foreach ($data_diskon as $row)
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


@endsection
