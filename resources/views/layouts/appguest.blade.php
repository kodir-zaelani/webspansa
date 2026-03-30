<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>{{ __($title) ?? config('app.name', 'Teras Petani') }}</title>

    <link rel="stylesheet" href="{{ asset('') }}assets/backend/css/vendors_css.css">


    <link rel="stylesheet" href="{{ asset('') }}assets/backend/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/backend/css/skin_color.css">
    <link rel="stylesheet" href="{{ asset('') }}assets/icons/bootstrap-icons/bootstrap-icons.css">

</head>

<body class="hold-transition theme-primary bg-img" style="background-image: url({{asset('')}}assets/images/auth-bg/bg-1.jpg)">

    @yield('content')

    <script src="{{ asset('') }}assets/backend/js/vendors.min.js"></script>
    <script src="{{ asset('') }}assets/backend/js/pages/chat-popup.js"></script>
    <script src="{{ asset('') }}assets/icons/feather-icons/feather.min.js"></script>

    @stack('scripts')
</body>
</html>
