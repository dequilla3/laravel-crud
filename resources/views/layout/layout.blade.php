<!DOCTYPE html>
<html lang="en">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD Demo</title>
</head>

<div>
    <nav class="flex shadow px-72 py-3 justify-between">
        <a id="navBrand" class="font-mono text-lg hover:text-black text-slate-800 font-extrabold"
            href="/">DemoCodes</a>
        @php
            $hoverLinkStyle =
                'hover:font-semibold hover:ring-1 hover:ring-slate-700 hover:px-2 hover:py-1 hover:rounded';
        @endphp
        <ul id="navUl" class="flex w-1/2 justify-evenly">
            <li>
                <a id="user" class="font-mono {{ $hoverLinkStyle }}" href="{{ route('user.index') }}">Users</a>
            </li>
            <li>
                <a id="prod" class="font-mono {{ $hoverLinkStyle }}"
                    href="{{ route('product.index') }}">Products</a>
            </li>
        </ul>

    </nav>
</div>

<body class="font-mono">
    @yield('content')
</body>

@vite('resources/js/app.js')
<script type="text/javascript">
    let navUl = document.getElementById('navUl');
    let links = navUl.querySelectorAll('a');

    links.forEach(element => {
        element.addEventListener('click', function() {
            sessionStorage.selectedLinkId = element.id;
        });
        if (element.id == sessionStorage.selectedLinkId) {
            element.className = "font-semibold px-2 py-1 rounded";
            element.value = "test";
        }
    });

    let navBrand = document.getElementById('navBrand');
    navBrand.addEventListener('click', function(event) {
        sessionStorage.clear();
    })
</script>

</html>
