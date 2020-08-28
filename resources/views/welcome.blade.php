<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Employee Management System</title>

    <!-- BEGIN STYLESHEETS -->
    <!--link href='http://fonts.googleapis.com/css?family=Roboto:300italic,400italic,300,400,500,700,900' rel='stylesheet' type='text/css' /-->
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/modules/materialadmin/css/theme-default/bootstrap94be.css?1422823238') }}" />

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/modules/materialadmin/css/theme-default/materialadminb0e2.css?1422823243') }}" />

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/modules/materialadmin/css/theme-default/font-awesome.min753e.css?1422823239') }}" />

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/modules/materialadmin/css/theme-default/material-design-iconic-font.mine7ea.css?1422823240') }}" />


    <!-- END STYLESHEETS -->



</head>

<body class="menubar-hoverable header-fixed ">
    <div id="app">
        <mainapp></mainapp>
       
    </div>
</body>
<script src="{{mix('/js/app.js')}}"></script>
<!-- BEGIN JAVASCRIPT -->
<script src="{{ URL::asset('js/modules/materialadmin/libs/jquery/jquery-1.11.2.min.js') }}"></script>
<script src="{{ URL::asset('js/modules/materialadmin/libs/jquery/jquery-migrate-1.2.1.min.js') }}"></script>
<script src="{{ URL::asset('js/modules/materialadmin/libs/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/modules/materialadmin/libs/spin.js/spin.min.js') }}"></script>
<script src="{{ URL::asset('js/modules/materialadmin/libs/autosize/jquery.autosize.min.js') }}"></script>
<script src="{{ URL::asset('js/modules/materialadmin/libs/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
<script src="{{ URL::asset('js/modules/materialadmin/core/cache/63d0445130d69b2868a8d28c93309746.js') }}"></script>
<script src="{{ URL::asset('js/modules/materialadmin/core/demo/Demo.js') }}"></script>


<!-- END JAVASCRIPT -->

</html>