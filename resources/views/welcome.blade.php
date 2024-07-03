<!DOCTYPE html>
<html lang="en">
<head>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js', 'vendor/courier/build')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel CRUD Demo</title>
</head>
<body>
    <a class="border px-4 py-2 text-sm rounded bg-sky-500 text-neutral-50 hover:bg-sky-400"
    href="{{ route('product.index') }}">View product</a>
</body>
</html>