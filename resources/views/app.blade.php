<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="ep" content="index">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>X-Project</title>
    <link href="{{url('https://fonts.googleapis.com/css?family=Open+Sans&amp;subset=latin,cyrillic-ext')}}" rel="stylesheet" type="text/css">
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/app.css')}}" rel='stylesheet'>
    <link href="{{asset('/favicon.ico')}}" rel='shortcut icon'>
</head>
<body>
    <div id="app" class="">
        <div class="content-wrapper">
            <div>
                @include('./layouts.header')
                @yield('content')
                @include('./layouts.footer')
            </div>
        </div>
    </div>
    <!-- Resources -->
    <script src="{{url('https://cdn.amcharts.com/lib/4/core.js')}}" type="text/javascript"></script>
    <script src="{{url('https://cdn.amcharts.com/lib/4/charts.js')}}" type="text/javascript"></script>
    <script src="{{url('https://cdn.amcharts.com/lib/4/themes/animated.js')}}" type="text/javascript"></script>
    <script src="{{asset('/js/app.js')}}" type="text/javascript"></script>
</body>
</html>
