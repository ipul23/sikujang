@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Pesanan</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('demand.index') }}"> Kembali</a>
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
    {{ Form::open(array('route' => 'demand.store','method'=>'POST')) }}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Pemesan :</strong>
                {{ Form::textarea('client_name', null, array('placeholder' => 'Nama pemesan','class' => 'form-control','style'=>'height:40px')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pilih Produk:</strong>
                {{Form::select('product_id',$product,null,array('class'=>'form-control'))}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kuantitas :</strong>
                {{ Form::textarea('demand_quantity', null, array('placeholder' => 'Kuantitas','class' => 'form-control','style'=>'height:40px')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Catatan :</strong>
                {{ Form::textarea('demand_note', null, array('placeholder' => 'Catatan Produk','class' => 'form-control','style'=>'height:100px')) }}
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