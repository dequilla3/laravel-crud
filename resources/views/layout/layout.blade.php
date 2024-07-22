<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Demo</title>
</head>

<x-navbar />
<x-loading />

<body class="">
    @yield('content')
</body>

@vite('resources/js/app.js')
</html>
