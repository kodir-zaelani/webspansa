<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('themes.aksataedu.partials.styles')
    @livewireStyles

</head>

<body class="theme-primary">

    @include('themes.aksataedu.partials.iconbar-sticky')
    @include('themes.aksataedu.partials.header')

    @yield('content')
    {{ isset($slot) ? $slot : null }}

    @include('themes.aksataedu.partials.footer')

    @include('themes.aksataedu.partials.scripts')


    @livewireScripts

</body>
</html>
