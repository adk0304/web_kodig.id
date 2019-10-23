
@extends('admin/base')
@section('content')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo :: PROMO</title>
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
                <h2>PROMO
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
                <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal">Tambah Promo</button>

                        <table class="table table-hover m-b-0">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>ID Promo</th>
                                    <th>Nama Promo</th>
                                    <th>Jenis Promo</th>
                                    <th>Nominal</th>
                                    <th>Expired Date</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <?php $no=0; ?>
                                    @foreach ($promo as $p)
                                    @php
                                    $no++;
                                    @endphp
                                    <tr>
                                        <th scope="row">{{$no}}</th>
                                        <td>{{$p->id}}</td>
                                        <td>{{$p ->nama_promo}}</td>
                                        <td>{{$p ->jenis_promo}}</td>
                                        <td>{{$p ->nominal_promo}}</td>
                                        <td>{{$p ->expired_date}}</td>
                                        <td>
                                        <a href="/promo/edit/{{ $p->id }}" class="btn btn-default waves-effect waves-float waves-green" ><i class="zmdi zmdi-edit"></i></a>
                                        <a href="/promo/delete/{{ $p->id }}" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                        </td>
                                    </tr>
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
                            <li class="page-item active"><a href="javascript:void(0);">{{$promo->links()}}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--MODAL TAMBAH PRODUK Default Size -->
<div class="modal fade" id="defaultModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Tambah Promo</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="/promo/store">
                        {{ csrf_field() }}

                    {{ method_field('PUT') }}
                        <div class="form-group">
                            <label>Nama Promo</label>
                            <input type="text" name="nama_promo" class="form-control" placeholder="Nama Promo ..">
                            @if($errors->has('nama_promo'))
                                <div class="text-danger">
                                    {{ $errors->first('nama_promo')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Jenis Promo</label>
                            <input type="text" name="jenis_promo" class="form-control" placeholder="Jenis Promo ..">
                                @if($errors->has('jenis_promo'))
                                <div class="text-danger">
                                    {{ $errors->first('jenis_promo')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Nominal Promo</label>
                            <input type="text" name="nominal_promo" class="form-control" placeholder="nominal Promo ..">
                                @if($errors->has('nominal_promo'))
                                <div class="text-danger">
                                    {{ $errors->first('nominal_promo')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Expired Promo</label>
                            <input class="form-control" type="date" name="expired_date"  id="example-date-input">
                            @if($errors->has('expired_date'))
                                <div class="text-danger">
                                    {{ $errors->first('expired_date')}}
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


{{-- ---------------@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ --}}
<!--MODAL EDIT PRODUK Default Size -->
<div class="modal fade" id="Modaledit" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="title" id="Modaledit">Tambah Promo</h4>
        </div>
        <div class="modal-body">
            <form method="post" action="/promo/store">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Promo</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama Promo ..">
                    @if($errors->has('nama'))
                        <div class="text-danger">
                            {{ $errors->first('nama')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Jenis Promo</label>
                    <input type="text" name="jenis_promo" class="form-control" placeholder="Jenis Promo ..">
                        @if($errors->has('jenis_promo'))
                        <div class="text-danger">
                            {{ $errors->first('jenis_promo')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Nominal Promo</label>
                    <input type="text" name="nominal_promo" class="form-control" placeholder="nominal Promo ..">
                        @if($errors->has('nominal_promo'))
                        <div class="text-danger">
                            {{ $errors->first('nominal_promo')}}
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label>Expired Promo</label>
                    <input class="form-control" type="date" name="expired_date"  id="example-date-input">
                    @if($errors->has('expired_date'))
                        <div class="text-danger">
                            {{ $errors->first('expired_date')}}
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
