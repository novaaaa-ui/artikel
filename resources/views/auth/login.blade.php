<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('adminlte/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
   <a href="#" onclick="return false;"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">

    @if (session('failed'))
    <div class="alert alert-danger">{{session('failed')}}</div>
    @endif

      <p class="login-box-msg">Sign in to start your session</p>
      
     <form action="{{ route('login.post') }}" method="POST">
        @csrf
        @error('email')
            <small class="text-danger">{{$message}}</small> 
        @enderror
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
           </div>
        </div>
          @error('password')
              <small class="text-danger">{{$message}}</small> 
          @enderror
        <div class="input-group mb-3">
          <input type="password" name="password" class="form-control" placeholder="Password" id="password">
          <div class="input-group-append show-password">
            <div class="input-group-text">
              <span class="fas fa-lock" id="password-lock"></span>
            </div>
          </div>
          </div>
        <div class="row">
          <div class="col-8">
            </div>
          </div>
          <!-- /.col -->
        <div class="col-4"> 
          <button type="submit" class="btn btn-primary btn-block">Sign In</button> 
        </div>
          <!-- /.col -->
        </div>
      </form>

  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('adminlte/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('adminlte/dist/js/adminlte.min.js')}}"></script>

<script>
  $('.show-password').on('click', function(){
    if($('#password').attr('type') == 'password'){
      $('#password').attr('type', 'text');
      $('#password-lock').attr('class', 'fas fa-unlock');
    }else{
      $('#password').attr('type', 'password');
      $('#password-lock').attr('class', 'fas fa-lock');
    }
  })
</script>
 
</body>
</html>
