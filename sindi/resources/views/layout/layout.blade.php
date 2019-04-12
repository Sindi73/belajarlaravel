<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<link rel = "stylesheet" type = "text/css" rel = "http://localhost/sindi/public/css/css.css">
</head>
<body>
<header>
@include('layout.header')
</header>
<ul>
@section('sidebar')
<li>HTML</li>
<li>CSS</li>
<li>JS</li>
</ul>
@show
<div class="container">
@yield('content')
</div>
</body>
</html>