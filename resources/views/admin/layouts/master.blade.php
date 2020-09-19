<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Dashboard</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{url('assets/admin')}}/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/dist/css/skins/_all-skins.min.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/plugins/iCheck/flat/blue.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/plugins/morris/morris.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/plugins/datepicker/datepicker3.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/dist/fonts/fonts-fa.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="{{url('assets/admin')}}/dist/css/rtl.css">
  </head>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
        @include('admin.includes.header')
        @include('admin.includes.aside')

        <div class="content-wrapper">
            @yield('content-header')
            @yield('content')
        </div>  
        
        @include('admin.includes.footer')

    </div>
    <script src="{{url('assets/admin')}}/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <script src="{{url('assets/admin')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="{{url('assets/admin')}}/plugins/morris/morris.min.js"></script>
    <script src="{{url('assets/admin')}}/plugins/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{url('assets/admin')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="{{url('assets/admin')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{url('assets/admin')}}/plugins/knob/jquery.knob.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="{{url('assets/admin')}}/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{url('assets/admin')}}/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script src="{{url('assets/admin')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <script src="{{url('assets/admin')}}/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="{{url('assets/admin')}}/plugins/fastclick/fastclick.min.js"></script>
    <script src="{{url('assets/admin')}}/dist/js/app.min.js"></script>
    <script src="{{url('assets/admin')}}/dist/js/pages/dashboard.js"></script>
    <script src="{{url('assets/admin')}}/dist/js/demo.js"></script>
  </body>
</html>
      