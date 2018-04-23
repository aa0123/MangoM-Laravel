<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
@include('inc.head')
</head>
<body>
@include('inc.navbar')
@include('inc.messages')
@yield('content')
@include('inc.footer')
@include('inc.footer-scripts')
</body>
</html>
