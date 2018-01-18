@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deskripsi Barang</h2>
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

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Nama Pembeli : </strong>
                {{ $demand->client_name }}</h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Nama Produk : </strong>
                {{ \App\product::find($demand->product_id)->product_name }}</h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Tanggal Pemesanan : </strong>
                {{ $demand->created_at }}</h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Kuantitas Produk (dalam kilogram): </strong>
                {{ $demand->demand_quantity }}</h3>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <h3><strong>Harga Total Produk : </strong>
                {{ $demand->demand_price }}</h3>
            </div>
        </div>




        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">
                <h3><strong>Keterangan : </strong>
                {{ $demand->demand_note }}</h3>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" class="btndemand"><br>
            <a class="btn btn-primary btn-lg" href="{{ route('demand.edit',$demand->demand_id) }}">Ubah</a>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">
              Selesai
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Apa anda yakin ingin menyelesaikan permintaan ini?</h4>
                  </div>
<!--                   <div class="modal-body">
                  </div> -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    {{Form::open(['method' => 'delete','route' => ['demand.destroy', $demand->demand_id],'style'=>'display:inline']) }}
                    {{Form::submit('Ya', ['class' => 'btn btn-success']) }}
                  </div>
                </div>
              </div>
            </div>
            {{Form::close() }}
        </div>
    </div>

@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection
