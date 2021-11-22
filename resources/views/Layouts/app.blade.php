<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}" type="text/css">
    <title>Document</title>
</head>
<body class="bg-gradient-to-r from-gray-100 to-gray-200">
    @yield('content')

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
