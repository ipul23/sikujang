@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Daftar Karyawan</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('user.create') }}"> Tambah Karyawan    <i class="fa fa-plus" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Email</th>
            <th>Pilihan</th>
        </tr>
    @foreach ($users as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>


            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
              Hapus
            </button>
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Apa anda yakin ingin menghapus karyawan ini?</h4>
                  </div>

                  <div class="modal-footer" >
                    <button type="button" class="btn btn-default" data-dismiss="modal">Tidak</button>
            {{Form::open(['method' => 'DELETE','route' => ['user.destroy', $user->id],'style'=>'display:inline']) }}
            {{Form::submit('Hapus', ['class' => 'btn btn-danger']) }}
            {{Form::close() }}
                  </div>
                </div>
              </div>
            </div>
        </td>
    </tr>
    @endforeach
    </table>

    {{ $users->render() }}

@endsection
@section('name')
  {{ Auth::user()->name }}
@endsection