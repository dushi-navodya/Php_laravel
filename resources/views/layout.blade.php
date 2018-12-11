<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','Home')</title>
</head>
<body>
@yield('content')

<ul>
    <li><a href="/">Welcome to Home Page</a></li>

    <li><a href="/register">Register yourself for more information</a></li>

    <li> <a href="/about">Welcome to About us Page</a></li>
</ul>


</body>
@yield('footer')
</html>