<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO LIST</title>
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    {{-- NAVBAR --}}
    @include('inc.navbar') {{-- MESSAGES --}}
    @include('inc.messages') {{-- CONTENT --}}

    <div class="container">
        @yield('content')
    </div>

    @yield('footer')
    <p id='footer' class='text-center'>Copyright &copy; 2019 TODO list</p>


    <script src="/js/app.js"></script>
</body>

</html>