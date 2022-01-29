<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="csrf-toker" content="{{csrf_token()}}">

	<title>BakeryShop - Login Admin</title>

	<link href="{{ URL::asset('back/css/styles.css'); }}" rel="stylesheet" />
</head>
<body>
	<div id="layoutAuthentication_content">
        <main>
           	<div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Login Administrator</h3></div>
                                <div class="card-body">
                                    @if (Session::has('success'))
                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('success') }}
                                        </div>
                                    @endif
                                    <form method="POST" action="{{ route('admin.login') }}" novalidate>
                                        @csrf
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('email') is-invalid @enderror" id="inputEmailAddress" type="email" placeholder="Isi email" name="email" value="{{old('email')}}" />
                                            <label for="inputEmailAddress">Email address</label>
                                            @error('email')
                                                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control @error('email') is-invalid @enderror" id="inputPassword" type="password" placeholder="Isi password" name="password" />
                                            <label for="inputPassword">Password</label>
                                            @error('password')
                                                <span class="invalid-feedback"><strong>{{$message}}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button type="submit" class="btn btn-primary">{{__('login')}}</button>
                                        </div>
                                    </form>
                                </div>
                            <div class="card-footer text-center py-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>