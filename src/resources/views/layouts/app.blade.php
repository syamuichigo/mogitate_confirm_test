<!DOCTYPE html>
<html lang="jp">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MoGiTaTe</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <a href="/products" class="header_inner-text">mogitate</a>
        </div>
    </header>
    @yield('content')
</body>

</html>