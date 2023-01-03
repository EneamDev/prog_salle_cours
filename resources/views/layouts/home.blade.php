
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/all_rooms.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 07:07:25 GMT -->
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Spice Hotel | Bootstrap 4 Admin Dashboard Template + UI Kit</title>
    <!-- icons -->
    <link href="{{asset('assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{asset('assets/plugins/material/material.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/material_style.css')}}">
    <!-- data tables -->
    <link href="{{asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.css')}}" rel="stylesheet"
          type="text/css" />
    <!-- animation -->
    <link href="{{asset('assets/css/pages/animate_page.css" rel="stylesheet')}}">
    <!-- Template Styles -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/css/theme-color.css')}}" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
</head>
<!-- END HEAD -->

<body
    class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white dark-sidebar-color logo-dark">
<div class="page-wrapper">
    <!-- start header -->
    @include('layouts.partials._header')
    <!-- end header -->
    <!-- start page container -->
    <div class="page-container">
        <!-- start sidebar menu -->
     @include('layouts.partials._sidebar')
        <!-- end sidebar menu -->
        <!-- start page content -->
        @yield('contenu')
        <!-- end page content -->
        <!-- start chat sidebar -->
      @include('layouts.partials._setting')
        <!-- end chat sidebar -->
    </div>
    <!-- end page container -->
    <!-- start footer -->
   @include('layouts.partials._footer')
    <!-- end footer -->
</div>
<!-- start js include path -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('assets/plugins/popper/popper.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-blockui/jquery.blockui.min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Common js-->
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/layout.js')}}"></script>
<script src="{{asset('assets/js/theme-color.js')}}"></script>
<!-- data tables -->
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/js/pages/table/table_data.js')}}"></script>
<!-- Material -->
<script src="{{asset('assets/plugins/material/material.min.js')}}"></script>
<!-- animation -->
<script src="{{asset('assets/js/pages/ui/animations.js')}}"></script>
<!-- end js include path -->
</body>


<!-- Mirrored from radixtouch.in/templates/admin/hotel/source/all_rooms.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Nov 2020 07:07:25 GMT -->
</html>
