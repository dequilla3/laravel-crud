<div>
    @if (session('message'))
        <x-msg-box />
    @endif
    <nav class="flex shadow px-72 py-3 justify-between">
        <a id="navBrand" class="font-mono text-lg hover:text-black text-slate-800 font-extrabold"
            href="/">DemoCodes</a>
        @php
            $hoverLinkStyle = 'hover:bg-sky-200 px-5 py-1 hover:rounded';
        @endphp
        <ul id="navUl" class="flex w-1/2 justify-evenly">
            <li>
                <a id="user" class="{{ $hoverLinkStyle }}" href="{{ route('user.index') }}">Users</a>
            </li>
            <li>
                <a id="prod" class="{{ $hoverLinkStyle }}" href="{{ route('product.index') }}">Products</a>
            </li>

        </ul>

    </nav>
</div>

<script type="text/javascript">
    let navUl = document.getElementById('navUl');
    let links = navUl.querySelectorAll('a');

    links.forEach(element => {
        element.addEventListener('click', function() {
            sessionStorage.selectedLinkId = element.id;
        });
        if (element.id == sessionStorage.selectedLinkId) setClassNameByElement(element);
    });

    function setClassNameByElement(element) {
        element.className = "bg-sky-200 px-5 py-1 rounded";
    }

    let navBrand = document.getElementById('navBrand');
    navBrand.addEventListener('click', function(event) {
        sessionStorage.clear();
    })
</script>
