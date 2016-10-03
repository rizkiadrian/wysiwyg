<!doctype html>
<html>
<head>
@include('include.head')
</head>
<body>
<div class="container">
 @include('include.header')
<div id="main" class="row">
@yield('content')
</div>
</div>
<footer class="row">
@include('include.foot')
</footer>
</body>
</html>
