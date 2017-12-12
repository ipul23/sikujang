@extends('layouts.app')

@section('content')
<div class="col-sm-12">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$produk}}</div>
                                    <div>Produk baru ditambahkan hari ini</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('product.index') }}">
                            <div class="panel-footer">
                                <span class="pull-left">Lihat lebih lanjut</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Terdapat</div>
                                    <div class="huge">{{$demand}}</div>
                                    <div>permintaan baru hari ini </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('demand.index')}}">
                            <div class="panel-footer">
                                <span class="pull-left">lihat lebih lanjut</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
 			<div id="temps_div"></div>
            <?= $lava->render('LineChart', 'Temps', 'temps_div') ?>
 </div>

@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection