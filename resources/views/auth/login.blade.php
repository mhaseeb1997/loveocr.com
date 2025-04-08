<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="title" content="Dashboard"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <link rel="stylesheet" href="{{asset('web_assets/admin/css/style.css')}}"/>
</head>
<body class="login-page bg-body-secondary">
<div class="login-box">
    <div class="login-logo">
        <a href="/"><b>Admin</b></a>
    </div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in </p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="email" name="email" class="form-control" placeholder="Email"/>
                </div>
                @error('email')
                <div class="text-danger mb-2">{{ $message }}</div>
                @enderror

                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password"/>
                </div>
                @error('password')
                <div class="text-danger mb-2">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" name="remember" type="checkbox" value=""
                                   id="flexCheckDefault"/>
                            <label class="form-check-label" for="flexCheckDefault"> Remember Me </label>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>

