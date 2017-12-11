@extends('layouts.app')

@section('content')
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="{{ route('produk.sell_store')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="">Tanggal</label>
          <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="">
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
        <label for="">Jumlah Produk </label>
        <input id="jumlah" type="number" class="form-control" name="jumlah" placeholder="Jumlah Produk yang Terjual" value="">
     </div>

     <div class="form-group">
       <input type="submit" name="" class="btn btn-primary" value="Save">
     </div>
  </form>
</div>
</div>@endsection

@section('name')
  {{ Auth::user()->name }}
@endsection
