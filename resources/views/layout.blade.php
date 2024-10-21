<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio Builder</title>
</head>
<body>
    @include('pages.header')


    @include('pages.sidebar')

    @yield('content')

    @include('pages.footer')
</body>
</html>