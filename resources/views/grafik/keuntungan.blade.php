@extends('layouts.app')

@section('content') 
    <div id="div_{{ $i }}"></div>
    @linechart($i.'div','div_'.$i)
@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection