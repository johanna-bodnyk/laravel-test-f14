<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>@yield('title') | {{ Session::get('site_name'); }}</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        @yield('content')
        <script src="js/main.js"></script>
    </body>
</html>