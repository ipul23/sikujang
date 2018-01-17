@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah data produksi</h2>
            </div>
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

    {{ Form::open(array('route' => 'stock.store','method'=>'POST')) }}
    <div class="row">
      <label class="col-sm-1 control-label">Tahapan</label>
      <div class="col-sm-2">
      <select name="stage" class="form-control">
          <option value="Inisiasi">Inisiasi</option>
          <option value="Aklimatisasi">Aklimatisasi</option>
          <option value="Transplanting">Transplanting</option>
      </select>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Pilih produk:</strong>
            {{Form::select('product_id',$product,null,array('class'=>'form-control'))}}
        </div>
    </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Penambahan</strong>
                {{ Form::number('stock_increase', null, array('placeholder' => 'Pertambahan Produk','class' => 'form-control','style'=>'height:40px')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengurangan</strong>
                {{ Form::number('stock_decrease', null, array('placeholder' => 'Pengurangan Produk','class' => 'form-control','style'=>'height:40px')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
          {{ Form::hidden('stock_quantity') }}
    </div>
    {{ Form::close() }}
@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection
