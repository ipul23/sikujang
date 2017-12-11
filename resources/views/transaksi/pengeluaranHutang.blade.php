@extends('layouts.app')

@section('content')
<div class="col-md-4 col-sm-4 col-xs-12">
<div class="container">
  <form class="" action="{{ route('pengeluaranHutang.store')}}" method="post">
    {{ csrf_field() }}

    <div class="form-group">
        <label for="">Tanggal</label>
          <input id="tanggal" type="date" class="form-control" name="tanggal" placeholder="" value="">
    </div>

    <div class="form-group">
        <label for=""> Kontak</label>
        <select class="form-control" name="contact">
          <option value="-1">Silahkan Pilih Kontak</option>
          @foreach ($contacts as $contact)
            <option value="{{ $contact->id_contact }}">{{ $contact->nama }}</option>
          @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Pengeluaran Untuk</label>
        <select class="form-control" name="debit">
          <option value="-1">Silahkan Pilih Akun</option>
          @foreach ($akun_pengeluarans as $pengeluaran)
            <option value="{{ $pengeluaran->id_cabang }}">{{$pengeluaran->kode}} - {{ $pengeluaran->nama }}</option>
          @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="">Sebagai</label>
        <select class="form-control" name="kredit">
          <option value="-1">Silahkan Pilih Akun</option>
          @foreach ($akun_hutangs as $hutang)
            <option value="{{ $hutang->id_cabang }}">{{$hutang->kode}} - {{ $hutang->nama }}</option>
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
          <input id="tanggal" type="string" class="form-control" name="keterangan" placeholder="" value="Pengeluaran sebagai hutang">
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
