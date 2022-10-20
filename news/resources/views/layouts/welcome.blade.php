<!doctype html>
<html lang="zxx" dir="rtl" class="theme-light">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS --> 
        <link rel="stylesheet" href="/assets/css/bootstrap.rtl.min.css">
        <!-- Animate CSS --> 
        <link rel="stylesheet" href="/assets/css/animate.min.css">
        <!-- Meanmenu CSS -->
        <link rel="stylesheet" href="/assets/css/meanmenu.css">
        <!-- Boxicons CSS -->
        <link rel="stylesheet" href="/assets/css/boxicons.min.css">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
        <!-- Owl Carousel Default CSS -->
        <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">
        <!-- Magnific Popup CSS -->
        <link rel="stylesheet" href="/assets/css/magnific-popup.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="/assets/css/nice-select.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="/assets/css/style.css">
        <!-- Dark CSS -->
        <link rel="stylesheet" href="/assets/css/dark.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="/assets/css/responsive.css">
        <!-- RTL CSS -->
        <link rel="stylesheet" href="/assets/css/rtl.css">

        
        <title>{{$setting->website_name}}</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>

    <body>
        
   
       
       <!--Start Header Area-->

        @include('layouts.header')

        <!--End Header Area-->
        
        
        @yield('content')
     
        <!-- End Default News Area -->
        

        @include("layouts.footer")


        

        <!-- Start Go Top Area -->
        <div class="go-top">
            <i class='bx bx-up-arrow-alt'></i>
        </div>
        <!-- End Go Top Area -->

        
        
        <!-- dark version -->
        
        <!-- Jquery Slim JS -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Popper JS -->
        <script src="/assets/js/popper.min.js"></script>
        <!-- Bootstrap JS -->
        <script src="/assets/js/bootstrap.min.js"></script>
        <!-- Meanmenu JS -->
        <script src="/assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="/assets/js/owl.carousel.min.js"></script>
        <!-- Magnific/ Popup JS -->
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Nice Select JS -->
        <script src="/assets/js/nice-select.min.js"></script>
        <!-- Ajaxchimp JS -->
        <script src="/assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Form Validator JS -->
        <script src="/assets/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="/assets/js/contact-form-script.js"></script>

        <!-- Wow JS -->
        <script src="/assets/js/wow.min.js"></script>
        <!-- Custom JS -->
        <script src="/assets/js/main.js"></script>
       
        
  

    </body>
</html>