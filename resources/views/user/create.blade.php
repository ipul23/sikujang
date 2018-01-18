@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tambah Karyawan</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('user.index') }}"> Kembali</a>
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

    {{ Form::open(array('route' => 'user.store','method'=>'POST')) }}
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Karyawan:</strong>
                {{ Form::textarea('name', null, array('placeholder' => 'Nama Karyawan','class' => 'form-control','style'=>'height:40px')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>E-mail:</strong>
                {{ Form::textarea('email', null, array('placeholder' => 'E-mail','class' => 'form-control','style'=>'height:40px')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group" >
                <strong>Password:</strong><br>
                {{ Form::password('password', null, array('placeholder' => 'Password','class' => 'form-control','style'=>'width:1000px','name'=>'password', 'type'=>'password')) }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Retype Password:</strong><br>
                {{ Form::password('password_confirmation', null, array('placeholder' => 'Retype Password','class' => 'form-control','style'=>'width:300px','name'=>'password_confirmation', 'type'=>'password')) }}
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
