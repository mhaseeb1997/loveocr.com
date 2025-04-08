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
<body class="register-page bg-body-secondary">
<div class="register-box">
    <div class="register-logo">
        <a href="../index2.html"><b>Admin</b></a>
    </div>
    <div class="card">
        <div class="card-body register-card-body">
            <p class="register-box-msg">Register</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Name"/>
                </div>
                @error('name')
                <div class="text-danger mb-2">{{ $message }}</div>
                @enderror

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

                <div class="input-group mb-3">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Confirm Password"/>
                </div>
                @error('password_confirmation')
                <div class="text-danger mb-2">{{ $message }}</div>
                @enderror
                <div class="row">
                    <div class="col-12 mt-3">
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary">Sign Up</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
</html>
