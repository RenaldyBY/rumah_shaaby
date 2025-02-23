<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Dashboard ecommerce - Vuexy - Bootstrap HTML admin template</title>
    <link rel="apple-touch-icon" href="{{asset('')}}rumah_shaaby/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('')}}rumah_shaaby/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/vendors/css/extensions/toastr.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/themes/bordered-layout.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/themes/semi-dark-layout.min.css">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/pages/dashboard-ecommerce.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/plugins/charts/chart-apex.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/app-assets/css/plugins/extensions/ext-component-toastr.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('')}}rumah_shaaby/assets/css/style.css">
    <!-- END: Custom CSS-->

  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

 @include('layouts.header')


    <!-- BEGIN: Main Menu-->
    @include('layouts.navbar')

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            @yield('content')
        </div>
      </div>
    </div>
    <!-- END: Content-->

    {{-- custom --}}
    @include('layouts.customizer')
    <!-- Buynow Button-->
    <div class="buy-now"><a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger">Buy Now</a>

    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2021<a class="ms-25" href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span class="d-none d-sm-inline-block">, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="{{asset('')}}rumah_shaaby/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('')}}rumah_shaaby/app-assets/vendors/js/charts/apexcharts.min.js"></script>
    <script src="{{asset('')}}rumah_shaaby/app-assets/vendors/js/extensions/toastr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{asset('')}}rumah_shaaby/app-assets/js/core/app-menu.min.js"></script>
    <script src="{{asset('')}}rumah_shaaby/app-assets/js/core/app.min.js"></script>
    <script src="{{asset('')}}rumah_shaaby/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{asset('')}}rumah_shaaby/app-assets/js/scripts/pages/dashboard-ecommerce.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  <!-- END: Body-->
</html>
