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
                            <form method="POST" action="/transaksi/store">
                                @csrf
                            <div class="card-body">
                                <h4 class="card-title">{{$title}}</h4>
                                <hr/>
                                <button class="btn btn-sm btn-primary" type="button" data-target="#modalCreate" data-toggle="modal">Tambah Data</button>
                                <hr/>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>No</th>
                                            <th>Barang</th>
                                            <th>Harga</th>
                                            <th>Qty</th>
                                            <th>Sub Total</th>
                                        </tr>
                                        <tr>
                                            <td>No</th>
                                            <td>Barang</th>
                                            <td>Harga</th>
                                            <td>Qty</th>
                                            <td>Sub Total</th>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Diskon</td>
                                            <td>Diskon</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4">Total Bayar</td>
                                            <td>Total Bayar</td>
                                        </tr>
                                    </table>
                                </div>
                                <hr/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>No Transaksi</label>
                                            <input type="text" class="form-control" name="no_transaksi" value="NT.001" readonly required>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Transaksi</label>
                                            <input type="text" class="form-control" value="{{ date('d/M/Y')}}" readonly required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Uang Pembeli</label>
                                            <input type="number" class="form-control" name="uang_pembeli" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Kembalian</label>
                                            <input type="text" class="form-control" name="kembalian" readonly required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="/transaksi" class="btn btn-danger">Cancel</a>
                            </div>
                        </form>
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
                <form method="POST" action="/transaksi/cart" >
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <select class="form-control" name="id_barang" required>
                                <option value="" hidden>-- pilih nama barang</option>

                            </select>
                        </div>
                        <div id="tampil_barang"></div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
@endsection
