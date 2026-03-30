@if ($global_option->favicon)
<link rel="icon" href="{{ asset('') }}uploads/images/logo/{{ $global_option->favicon }}" rel="icon">
@else
<link rel="icon" href="{{asset('')}}assets/images/favicon.ico">
@endif
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
{{ isset($slot) ? $slot : null }}
<title>{{ $title ?? config('app.name', 'Anak Petani') }}</title>

<link rel="stylesheet" href="{{ asset('') }}assets/frontedu/css/vendors_css.css">

<link rel="stylesheet" href="{{ asset('') }}assets/frontedu/css/style.css">
<link rel="stylesheet" href="{{ asset('') }}assets/frontedu/css/skin_color.css">
<link href="{{asset('')}}assets/icons/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
@stack('styles')
