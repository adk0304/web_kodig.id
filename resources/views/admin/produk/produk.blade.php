
@extends('admin/base')
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo :: Product List</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/ecommerce.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    </head>
<section class="content ecommerce-page">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Product List
                <small>Welcome to Oreo</small>
                </h2>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card product_item_list">
                    <div class="body table-responsive">
                <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Produk</button>

                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID Produk</th>
                                    <th>Nama Produk</th>
                                    <th>Jenis Produk</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no=0; ?>
                                    @foreach ($produk as $p)
                                    @php
                                    $no++;
                                    @endphp
                                    <tr>
                                        <th scope="row">{{$no}}</th>
                                        <td>{{$p->id}}</td>
                                        <td>{{$p ->nama_produk}}</td>
                                        <td>{{$p ->jenis_produk}}</td>
                                        <td>
                                        {{-- <a href="/produk/edit/{{ $p->id }}" class="btn btn-default waves-effect waves-float waves-green" ><i class="zmdi zmdi-edit"></i></a> --}}
                                        <button type="button" class="btn btn-default waves-effect waves-float waves-green" data-toggle="modal" data-target="#defaultModal_edit_{{$p->id}}"><i class="zmdi zmdi-edit"></i></button>
                                        <a href="/produk/delete/{{ $p->id }}" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>

<!--MODAL TAMBAH PRODUK Default Size -->

                                    @endforeach
                                    {{-- <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td> --}}
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card">
                    <div class="body">
                        <ul class="pagination pagination-primary m-b-0">
                            <li class="page-item active"><a href="javascript:void(0);">{{$produk->links()}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--MODAL TAMBAH PRODUK Default Size --><div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="title" id="defaultModalLabel">Tambah Promo</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="/produk/store">
                            {{ csrf_field() }}
                        {{ method_field('PUT') }}
                            <div class="form-group">
                                <label>Nama Promo</label>
                                <input type="text" name="nama_produk" class="form-control" placeholder="Nama Produk ..">
                                @if($errors->has('nama_produk'))
                                    <div class="text-danger">
                                        {{ $errors->first('nama_promo')}}
                                    </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Jenis Promo</label>
                                <input type="text" name="jenis_produk" class="form-control" placeholder="Jenis Produk ..">
                                    @if($errors->has('jenis_produk'))
                                    <div class="text-danger">
                                        {{ $errors->first('jenis_produk')}}
                                    </div>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
