@extends('layouts.app')

@section('content') 
    @for ($j=1; $j<$i; $j++)
            <div id="div_{{ $j }}"></div>
            @columnchart($j.'div','div_'.$j)
    @endfor
    <div id="div_{{ $i }}"></div>
            @columnchart($i.'div','div_'.$i)
@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection