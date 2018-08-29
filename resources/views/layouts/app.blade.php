<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('inc.head')
</head>
<body>
<div class="wrapper">
@include('inc.navbar')
@include('inc.messages')
@yield('content')

<div class="push"></div>
</div>
@include('inc.footer')
@include('inc.footer-scripts')
</body>
</html>
