<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{asset('/assets/icon/favicon.ico')}}" type="image/x-icon">
    <link rel="icon" href="{{asset('/assets/icon/favicon.ico')}}" type="image/x-icon">

    <title>Lottery</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('/assets/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    @yield('style')
</head>
    @include('layouts.header-main')

    <body>
    @yield('content')

    @include('layouts.footer-main')
    <script src="{{asset('/assets/js/bootstrap-datepicker.min.js')}}"></script>

@yield('script')

</body>

</html>
