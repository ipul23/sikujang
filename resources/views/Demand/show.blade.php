@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deskripsi barang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('demand.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama pembeli : </strong>
                {{ $demand->client_name }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama produk : </strong>
                {{ \App\product::find($demand->product_id)->product_name }}
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanggal pemesanan : </strong>
                {{ $demand->created_at }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kuantitas produk (dalam kilogram): </strong>
                {{ $demand->demand_quantity }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Harga total produk : </strong>
                {{ $demand->demand_price }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan : </strong>
                {{ $demand->demand_note }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
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
                  <div class="modal-body">
                    ...
                  </div>
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