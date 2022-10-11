
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>INSPINIA | Dashboard</title>

    <link href="/assets/dashboard_assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/dashboard_assets/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/assets/dashboard_assets/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="/assets/dashboard_assets/js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="/assets/dashboard_assets/css/animate.css" rel="stylesheet">
    <link href="/assets/dashboard_assets/css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">
        @include('dashboard.leftMenu')

        <div id="page-wrapper" class="gray-bg dashbard-1">
        @include('dashboard.header')
        @yield('content')
        @include('dashboard.footer')
                
        
            
        </div>
        
        
        
    </div>

    <!-- Mainly scripts -->
    <script src="/assets/dashboard_assets/js/jquery-3.1.1.min.js"></script>
    <script src="/assets/dashboard_assets/js/popper.min.js"></script>
    <script src="/assets/dashboard_assets/js/bootstrap.js"></script>
    <script src="/assets/dashboard_assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/assets/dashboard_assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="/assets/dashboard_assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="/assets/dashboard_assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="/assets/dashboard_assets/js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="/assets/dashboard_assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="/assets/dashboard_assets/js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="/assets/dashboard_assets/js/plugins/peity/jquery.peity.min.js"></script>
    <script src="/assets/dashboard_assets/js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/assets/dashboard_assets/js/inspinia.js"></script>
    <script src="/assets/dashboard_assets/js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="/assets/dashboard_assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="/assets/dashboard_assets/js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="/assets/dashboard_assets/js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="/assets/dashboard_assets/js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="/assets/dashboard_assets/js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="/assets/dashboard_assets/js/plugins/toastr/toastr.min.js"></script>


    
</body>
</html>