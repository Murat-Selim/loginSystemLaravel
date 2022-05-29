<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"/>
    <script src="{{asset('js/app.js')}}"></script>
    <title>Login</title>
</head>
<body>
<div class="container box col-sm-4 col-sm-4 col-sm-4">
    <br />
    <h4 class="fw-300 c-grey-900 mB-40">Login</h4>
    <br />
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <form action="{{route('checkLogin')}}" method="POST" accept-charset="utf-8">
            @csrf
            <div class="form-group">
                <label class="text-normal text-dark">Email</label>
                <br />
                <input type="text" name="email" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
                <label class="text-normal text-dark">Password</label>
                <br />
                <input type="password" name="password" placeholder="Password" class="form-control password">
            </div>
            <br />
            <div class="form-group">
                <input type="submit" name="login" value="Login" class="btn btn-primary">
            </div>
        </form>
</div>
</body>
</html>
