<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="/assets/dashboard_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/dashboard_assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="/assets/dashboard_assets/css/animate.css" rel="stylesheet">
    <link href="/assets/dashboard_assets/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div class="login_screen">
          @if(session()->has('danger'))
    <div class="alert alert-danger">
        {{ session()->get('danger') }}
    </div>
    @endif  
@if ($error = $errors->first('password'))
  <div class="alert alert-danger">
    {{ $error }}
  </div>
@endif
            <h2>Please Login</h2>
            
            <p>Login in. To Pak Awami News.</p>
        <form class="m-t" role="form" method="POST" action="{{url('/dashboard')}}">
                @csrf
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Username" required="" name="email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required="" name="password">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b" value="login">Login</button>

                
                
            </form>
           
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="assets/dashboard_assets/js/jquery-3.1.1.min.js"></script>
    <script src="assets/dashboard_assets/js/popper.min.js"></script>
    <script src="assets/dashboard_assets/js/bootstrap.js"></script>

</body>

</html>
