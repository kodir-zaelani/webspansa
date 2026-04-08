
@if ($global_option->favicon)
<link rel="icon" href="{{ asset('') }}uploads/images/logo/{{ $global_option->favicon }}" rel="icon">
@else
<link rel="icon" href="{{asset('')}}assets/images/favicon.ico">
@endif

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
@if (Request::segment(1) == '')
<meta property="og:type" content="article"/>
@if ($global_option->logo != null)
<meta property="og:image" content="{{ $global_option->imageThumbUrl }}" />
@endif
@elseif (Request::segment(1) != null)
<meta property="og:type" content="article"/>
@if ($item->image != null)
<meta property="og:image" content="{{ $item->imageThumbUrl }}" />
@endif
@endif

@if ($global_option->webname != null)
<meta property="og:title" content="{{ $global_option->webname }}"/>
@else
<meta name="og:title" content="Maroko Kreatif">
@endif
@if ($global_option->meta_keywords != null)
<meta name="keywords" content="{{ $global_option->meta_keywords }}">
@else
<meta name="keywords"
content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
@endif
@if ($global_option->meta_description != null)
<meta name="description" content="{{ $global_option->meta_description }}">
@else
<meta name="description"
content="Digital Nusantara, Digital Nusantara Borneo, Borneo, Digital, Nusantara, Kaltim">
@endif

<meta name="author" content="">
{{ isset($slot) ? $slot : null }}
<title>{{ $title ?? config('app.name', 'Anak Petani') }}</title>

<link rel="stylesheet" href="{{ asset('') }}assets/frontedu/css/vendors_css.css">

<link rel="stylesheet" href="{{ asset('') }}assets/frontedu/css/style.css">
<link rel="stylesheet" href="{{ asset('') }}assets/frontedu/css/skin_color.css">
<link href="{{asset('')}}assets/icons/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
@stack('styles')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=69d3f11f93f102c20db92ece&product=sop' async='async'></script>
