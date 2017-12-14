@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Login Kayawan Hari ini</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="datatable-buttons" class="table table-stripped table-bordered">
      <thead>
        <tr>
            <th>No</th>
            <th>Nama Karyawan</th>
            <th>Waktu Login</th>
        </tr>
      </thead>

    <tbody>
    @foreach ($users as $key => $user)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ \App\user::find($user->employee_id)->name }}</td>
        <td>{{ $user->date }}</td>
    </tr>
    @endforeach
  </tbody>
    </table>
    {{ $users->render() }}
@endsection

@section('name')
  {{ Auth::user()->name }}
@endsection
