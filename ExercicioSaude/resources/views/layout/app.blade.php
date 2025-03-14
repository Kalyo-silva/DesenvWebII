<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    @vite(['resources/css/layout.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>WebHealth</h1>
        <h2>@yield('subtile')</h2>
    </header>

    <div id = 'content'>
        @yield('content')
    </div>
</body>
</html>