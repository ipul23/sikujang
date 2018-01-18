@extends('layouts.app')

@section('content')<br><br><br>
    @for ($j=1; $j<$i; $j++)
            <div id="div_{{ $j }}"></div>
            @linechart($j.'div','div_'.$j)
    @endfor
    <div id="div_{{ $i }}"></div>
            @columnchart($i.'div','div_'.$i)
@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection
