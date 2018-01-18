@extends('layouts.appEditProduk')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ubah Produk</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('product.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($product, ['method' => 'PATCH','route' => ['product.update', $product->product_id]]) }}
    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Produk</strong>
                {{ Form::text('product_name', null, array('placeholder' => 'product_name','class' => 'form-control')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga Produk</strong>
                {{ Form::text('product_price', null, array('placeholder' => 'product_price','class' => 'form-control')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Deskripsi Produk</strong>
                {{ Form::textarea('product_desc', null, array('placeholder' => 'product_desc','class' => 'form-control','style'=>'height:100px')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Submit</button>
        </div>

    </div>
    {{ Form::close() }}
@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection