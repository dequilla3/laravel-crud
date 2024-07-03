<div>
    <div id="msgBox" class="block">
        <div class="h-screen w-screen fixed bg-black opacity-15 top-0"></div>
        <div
            class="absolute border p-8 rounded z-0 bg-white top-1/3 right-1/3 left-1/3 m-auto w-1/4 text-center shadow-lg">
            <div class="py-5">
                {{ session('message') }}
            </div>
            <br>
            <button id="msgBoxOkBtn" class="bg-sky-500 hover:bg-sky-600 text-slate-50 px-6 py-1 rounded">Okay</button>
        </div>
    </div>
</div>
