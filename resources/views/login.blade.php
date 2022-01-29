<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - BakeryShop</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="16x16" href="{{URL::asset('img/chef.png')}}">
    <style type="text/css">
        .body{
            background: url("/img/back.jpeg");
        }
    </style>
</head>
<body class="body">
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><img src="{{ URL::asset('img/chef.png'); }}" width="60" height="60" alt="" /><b> BakeryShop</b></h1>
                <br/>
             <br/>
             <h4 align="center">Selamat Datang</h4>
            <hr>
            @if(session('error'))
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required="">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center"><font color="white">Belum punya akun? <a href="{{ route('register-user') }}">Register</a> sekarang!</font></p>
            </form>
        </div>
    </div>
</body>
</html>