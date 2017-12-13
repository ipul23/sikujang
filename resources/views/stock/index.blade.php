@extends('layouts.app')

@section('content')
<br><br>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Produksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('stock.create') }}" id="produkbutton"> Tambah Data Produksi Baru</a>
            </div>
        </div>
    </div>

    <br>

    <!-- Form Pencarian -->
    <div class="col-md-10">
    {{ Form::open(['method'=>'GET','route'=>'stock.index','role'=>'search']) }}
            <!-- input type="text" class="form-control" name="search" placeholder="Search..." -->
            <div class="col-sm-2">
            <select name="search" class="form-control">
                <option value="Inisiasi">Inisiasi</option>
                <option value="Aklimatisasi">Aklimatisasi</option>
                <option value="Transplanting">Transplanting</option>
            </select>
          </div>
          <button class="btn btn-default" type="submit">Cari</button>
       </span>
             </span>
         </div>
    {{ Form::close() }}
    </div>


    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <br>
    <table id="datatable-buttons" class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama produk</th>
            <th>Tahapan</th>
            <th>Penambahan</th>
            <th>Pengurangan</th>
            <th>Pilihan</th>
        </tr>
    @foreach ($stocks as $stock)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $stock->date }}</td>
        <td>{{ \App\product::find($stock->product_id)->product_name }}</td>
        <td>{{ $stock->stage }}</td>
        <td>{{ $stock->stock_increase }}</td>
        <td>{{ $stock->stock_decrease }}</td>
        <td>
            <a class="btn btn-primary" href="{{ route('stock.edit',$stock->stock_id) }}">Ubah</a>
             <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
              Hapus
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Apa anda yakin ingin menghapus produk ini?</h4>
                  </div>
                  <div class="modal-body">
                    ...
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    {{Form::open(['method' => 'delete','route' => ['stock.destroy', $stock->stock_id],'style'=>'display:inline']) }}
                    {{Form::submit('Ya', ['class' => 'btn btn-success']) }}
                  </div>
                </div>
              </div>
            </div>
        </td>
    </tr>
    @endforeach
    </table>

    {{ $stocks->render() }}

@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection