@extends('layouts.appEditProduk')

@section('content')
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="{{ route('produk.historyUpdate', $penjualan)}}" method="post">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}


       <div class="form-group">
          <label for="">Nama Produk</label>
          <p class="form-control"> {{\app\Produk::find($penjualan->id_produk)->nama}} </p>
       </div>

       <div class="form-group">
           <label for="">Nama Produk</label>
           <select class="form-control" name="id_produk">
             @foreach ($produks as $produk)
               <option value="{{ $produk->id_produk }}">{{ $produk->nama }}</option>
             @endforeach
           </select>
       </div>

       <div class="form-group">
          <label for="">Stok</label>
          <input id="produk" type="number" class="form-control" name="stok" placeholder="Jumlah Produk" value="{{ $penjualan -> jumlah}}">
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
