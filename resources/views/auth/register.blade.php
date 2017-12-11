<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>SB Admin - Start Bootstrap Template</title>
<!-- Bootstrap core CSS-->
<link href="{{ url('asset_admin/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Custom fonts for this template-->
<link href="{{ url('asset_admin/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
<!-- Custom styles for this template-->
<link href="{{ url('asset_admin/css/sb-admin.css') }}" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="card card-login mx-auto mt-5">
    <div class="card-header">Register Account</div>
    <div class="card-body">

    <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Full Name</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">E-Mail Address</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password" >Password</label>

            <input id="password" type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
    </div>

    <div class="form-group">
        <label for="password-confirm" >Confirm Password</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
    </div>

    <div class="form-group">
        <div>
            <button type="submit" class="btn btn-primary btn-block">
                Register
            </button>
        </div>
    </div>
</form>
        <div class="text-center">
        <a class="d-block small mt-3" href="{{ route('login') }}">Have Already Account? <b>Log In</b></a>
        </div>
    </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="{{ url('asset_admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ url('asset_admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ url('asset_admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
</body>

</html>
