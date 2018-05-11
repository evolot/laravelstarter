<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
        name="viewport">
  <title>Welcome To | Bootstrap Based Admin Template - Material Design</title>
  <!-- Favicon-->
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext"
        rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"
        type="text/css">

  <!-- Bootstrap Core Css -->
  {{--<link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">--}}
  <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">
  <!-- Waves Effect Css -->
  <link href="{{asset('/css/admin/waves.css')}}" rel="stylesheet"/>

  <!-- Animation Css -->
  <link href="{{asset('/css/admin/animate.css')}}" rel="stylesheet"/>

  <!-- Morris Chart Css-->
  <link href="{{asset('/css/admin/morris.css')}}" rel="stylesheet"/>

  <!-- Custom Css -->
  <link href="{{asset('/css/admin/main.css')}}" rel="stylesheet">

  <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
  <link href="{{asset('/css/admin/all-themes.css')}}" rel="stylesheet"/>

  @section('style')
  @show
</head>

@include('admin.components.searchbar.searchbar')
@include('admin.components.navbar.navbar')
@include('admin.components.sidebar.sidebar')
@section('content')
@show

<!-- Jquery Core Js -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.js"></script>
{{--<script src="plugins/jquery/jquery.min.js"></script>--}}

<!-- Bootstrap Core Js -->
<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
{{--<script src="plugins/bootstrap/js/bootstrap.js"></script>--}}

<!-- Select Plugin Js -->
{{--<script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>--}}

<!-- Slimscroll Plugin Js -->
<script src="https://cdn.bootcss.com/jQuery-slimScroll/1.3.0/jquery.slimscroll.min.js"></script>
{{--<script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>--}}

<!-- Waves Effect Plugin Js -->
<script src="{{url('/js/admin/plugins/waves.min.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{url('/js/admin/plugins/jquery.countTo.js')}}"></script>

{{--<!-- Morris Plugin Js -->--}}
{{--<script src="plugins/raphael/raphael.min.js"></script>--}}
{{--<script src="plugins/morrisjs/morris.js"></script>--}}


<!-- Sparkline Chart Plugin Js -->
{{--<script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>--}}

<!-- Custom Js -->
<script src="{{asset('/js/admin/admin.js')}}"></script>
<script src="{{asset('/js/admin/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('js/admin/demo.js')}}"></script>
@section('js')
@show
</html>