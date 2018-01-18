@extends('layouts.appEditProduk')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Ubah Data Produksi</h2>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('stock.index') }}"> Kembali</a>
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

    {{ Form::model($stock, ['method' => 'PATCH','route' => ['stock.update', $stock->stock_id]]) }}
      <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Produk</strong>
                  {{Form::select('product_id',$product,null,array('class'=>'form-control'))}}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Penambahan</strong>
                  {{ Form::textarea('stock_increase', null, array('placeholder' => 'Deskripsi Produk','class' => 'form-control','style'=>'height:40px')) }}
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Pengurangan</strong>
                  {{ Form::textarea('stock_decrease', null, array('placeholder' => 'Deskripsi Produk','class' => 'form-control','style'=>'height:40px')) }}
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
