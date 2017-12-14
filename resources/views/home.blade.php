@extends('layouts.app')

@section('content')
<br><br><br><br><br><br>
<div class="col-sm-12">
            <div class="row">
                <div class="col-lg-6 col-md-6">
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

                <div class="col-lg-6 col-md-6">
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
 </div>

 <div class="col-sm-12">
             <div class="row">
                 <div class="col-lg-4 col-md-4">
                     <div class="panel panel-primary">
                         <div class="panel-heading1">
                             <div class="row">
                                 <div class="col-xs-3">
                                     <i class="fa fa-area-chart fa-5x"></i>
                                 </div>
                                 <div class="col-xs-9 text-right">
                                     <div class="huge">Grafik Produksi</div>
                                 </div>
                             </div>
                         </div>
                         <a href="{{ route('grafik.produksi') }}">
                             <div class="panel-footer">
                                 <span class="pull-left">Lihat lebih lanjut</span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-4">
                     <div class="panel panel-primary">
                         <div class="panel-heading2">
                             <div class="row">
                                 <div class="col-xs-3">
                                     <i class="fa fa-bar-chart fa-5x"></i>
                                 </div>
                                 <div class="col-xs-9 text-right">
                                     <div class="huge">Grafik Perjenis</div>
                                 </div>
                             </div>
                         </div>
                         <a href="{{ route('grafik.perjenis') }}">
                             <div class="panel-footer">
                                 <span class="pull-left">Lihat lebih lanjut</span>
                                 <span class="pull-right"><i class="fa fa-arrow-circle-right" ></i></span>
                                 <div class="clearfix"></div>
                             </div>
                         </a>
                     </div>
                 </div>
                 <div class="col-lg-4 col-md-4">
                     <div class="panel panel-primary">
                         <div class="panel-heading3" >
                             <div class="row">
                                 <div class="col-xs-3">
                                     <i class="fa fa-line-chart fa-5x"></i>
                                 </div>
                                 <div class="col-xs-9 text-right">
                                     <div class="huge">Grafik Keutungan</div>
                                 </div>
                             </div>
                         </div>
                         <a href="{{ route('grafik.keuntungan') }}">
                             <div class="panel-footer">
                                 <span class="pull-left">Lihat lebih lanjut</span>
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
