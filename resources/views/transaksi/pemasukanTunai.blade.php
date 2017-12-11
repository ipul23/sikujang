@extends('layouts.app')

@section('content')
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="{{ route('pemasukanTunai.store')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="">Tanggal</label>
          <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="">Diterima Dari</label>
        <select class="form-control" name="kredit">
          <option value="-1">Silahkan Pilih Akun</option>
          @foreach ($akun_pemasukans as $pemasukan)
            <option value="{{ $pemasukan->id_cabang }}">{{$pemasukan->kode}} - {{ $pemasukan->nama }}</option>
          @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Disimpan Ke</label>
        <select class="form-control" name="debit">
          <option value="-1">Silahkan Pilih Akun</option>
          @foreach ($akun_asets as $aset)
            <option value="{{ $aset->id_cabang }}">{{$aset->kode}} - {{ $aset->nama }}</option>
          @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Nilai</label>
          <input id="tanggal" type="number" class="form-control" name="nilai" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for="">Referensi</label>
          <input id="tanggal" type="string" class="form-control" name="referensi" placeholder="" value="">
    </div>


    <div class="form-group">
        <label for="">Keterangan</label>
          <input id="tanggal" type="string" class="form-control" name="keterangan" placeholder="" value="Pendapatan usaha">
    </div>

     <div class="form-group">
       <input type="submit" name="" class="btn btn-primary" value="Save">
     </div>
  </form>
</div>
</div>

@endsection

@section('name')
  {{ Auth::user()->name }}
@endsection
