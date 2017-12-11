@extends('layouts.appEditProduk')

@section('content')
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="{{ route('produk.update', $produks1)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }}">
       <label for="">Nama Produk</label>
       <input id="nama" type="text" class="form-control" name="nama" placeholder="Nama Produk.." value="{{ $produks1 -> nama}}">
       @if ($errors->has('nama'))
           <span class="help-block">
               <strong>{{ $errors->first('nama') }}</strong>
           </span>
       @endif
     </div>

     <div class="form-group">
        <label for="">Harga (IDR) </label>
        <input id="harga"type="number" class="form-control" name="harga" placeholder="Harga Produk" value="{{ $produks1 -> harga}}">
     </div>

     <div class="form-group">
        <label for="">Stok</label>
        <input id="produk" type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="{{ $produks1 -> stok}}">
     </div>

     <div class="form-group">
       <input type="submit" name="" class="btn btn-primary" value="Save">
     </div>
  </form>
</div>
</div>
@endsection

@section('name')
  {{ Auth::user()->name }}
@endsection
