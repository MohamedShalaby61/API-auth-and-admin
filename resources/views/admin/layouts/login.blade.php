    
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{url('assets/admin')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/plugins/iCheck/square/blue.css">
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="#"><b>Admin</b>LTE</a>
      </div>
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
      <div class="login-box-body">
        <form action="{{url('admin/login')}}" method="POST">
          @csrf
          <div class="form-group has-feedback">
            <input type="email" class="form-control" placeholder="البريد الالكتروني" name="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="كلمة السر" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="remember"> تذكرني
                </label>
              </div>
            </div>
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">التسجيل</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <script src="{{url('assets/admin')}}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="{{url('assets/admin')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{url('assets/admin')}}/plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' 
        });
      });
    </script>
  </body>
</html>
