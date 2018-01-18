@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deskripsi Barang</h2>
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

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Nama Produk : </strong>{{ $product->product_name }} </h3>
                
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Harga Produk :</strong>
                {{ $product->product_price }} </h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Deskripsi Produk :</strong> {{ $product->product_desc }} </h3>
                
            </div>
        </div>

    </div>



@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection