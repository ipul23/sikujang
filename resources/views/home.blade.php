@extends('layouts.app')

@section('content')
<br>
<div class="col-sm-12">
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h3>Produk Baru</h3>
                                    <h3>{{$produk}}</h3>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('product.index') }}">
                            <div class="panel-footer">
                                <span class="pull-left"><h4>Lihat lebih lanjut</h4></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading1">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h3>Permintaan Baru</h3>
                                    <h3>{{$demand}}</h3>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('demand.index')}}">
                            <div class="panel-footer">
                                <span class="pull-left"><h4>Lihat lebih lanjut</h4></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
 </div>


                 <div class="col-lg-12">
                     <div class="panel panel-primary">
                         <div class="panel-heading2">
                             <div class="row">
                                 <div class="col-xs-3">
                                     <i class="fa fa-area-chart fa-5x"></i>
                                 </div>
                                 <div class="col-xs-9 text-right">
                                     <h3>Grafik Produksi</h3>
                                 </div>
                             </div>
                         </div>
                         <a href="{{ route('grafik.produksi') }}">
                             <div class="panel-footer">
                                 <span class="pull-left"><h4>Lihat lebih lanjut</h4></span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
             
                 <div class="col-lg-12">
                     <div class="panel panel-primary">
                         <div class="panel-heading3">
                             <div class="row">
                                 <div class="col-xs-3">
                                     <i class="fa fa-bar-chart fa-5x"></i>
                                 </div>
                                 <div class="col-xs-9 text-right">
                                     <h3>Grafik Perjenis</h3>
                                 </div>
                             </div>
                         </div>
                         <a href="{{ route('grafik.perjenis') }}">
                             <div class="panel-footer">
                                 <span class="pull-left"><h4>Lihat lebih lanjut</h4></span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
                 <br>
                 <div class="col-lg-12">
                     <div class="panel panel-primary">
                         <div class="panel-heading4" >
                             <div class="row">
                                 <div class="col-xs-3">
                                     <i class="fa fa-line-chart fa-5x"></i>
                                 </div>
                                 <div class="col-xs-9 text-right">
                                     <h3>Grafik Keuntungan</h3>
                                 </div>
                             </div>
                         </div>
                         <a href="{{ route('grafik.keuntungan') }}">
                             <div class="panel-footer">
                                 <span class="pull-left"><h4>Lihat lebih lanjut</h4></span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
               </div>
             </div>
@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection
