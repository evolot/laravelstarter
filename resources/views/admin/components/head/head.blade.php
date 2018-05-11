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
</head>
@section('content')
  @show
</html>