@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Produk</h2>
            </div>



    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="datatable-buttons" class="table table-stripped table-bordered" style="width:100%">
      <thead>
        <tr>
            <th >No</th>
            <th >Nama Produk</th>
            <th >Harga Produk</th>
            <th >Pilihan</th>
        </tr>
      </thead>

    <tbody>
    @foreach ($products as $key => $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $product->product_name }}</td>
        <td>{{ $product->product_price }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('product.show',$product->product_id) }}">Tampilkan</a>
            <a class="btn btn-primary" href="{{ route('product.edit',$product->product_id) }}">Ubah</a>
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

                  <div class="modal-footer" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
                    {{Form::open(['method' => 'delete','route' => ['product.destroy', $product->product_id],'style'=>'display:inline']) }}
                    {{Form::submit('Ya', ['class' => 'btn btn-danger']) }}
                  </div>
                </div>
              </div>
            </div>
        </td>
    </tr>

    @endforeach
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('product.create') }}">  Tambah Produk    <i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
  </tbody>
    </table>

    {{ $products->render() }}

@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection
