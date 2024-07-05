<!DOCTYPE html>
<html lang="en">
@extends('layout.layout')
@section('content')
    <div class="shadow-lg p-10 w-1/4 m-auto mt-10">
        <div id="test" class="font-semibold text-lg">EDIT USER</div>
        <form method="post" action="{{ route('user.saveUpdate', ['user' => $user]) }}" class="pt-5">
            @csrf
            @method('put')
            <div class="mb-3">
                <div class="text-sm">Name</div>
                <input required id="uname" name="name" type="text" value="{{ old('name') ?? $user->name }}"
                    class="border focus:outline-none px-3 py-2 w-full text-sm focus:ring-1 focus:ring-sky-300 shadow-sm rounded"
                    placeholder="e.g. Juan Dela Cruz">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="text-sm">Email</div>
                <input required name="email" type="text" value="{{ old('email') ?? $user->email }}"
                    class="border focus:outline-none px-3 py-2 w-full text-sm focus:ring-1 focus:ring-sky-300 shadow-sm rounded"
                    placeholder="e.g. juan_cruz@email.com">
                @error('email')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex space-x-1">
                <input id="submit" type="submit" value="Save"
                    class="bg-sky-500 px-4 py-2 rounded w-full text-neutral-50 cursor-pointer hover:shadow-lg hover:bg-sky-400">

                <a class="bg-red-500 px-4 py-2 rounded w-full text-neutral-50 cursor-pointer hover:shadow-lg hover:bg-red-400 text-center"
                    href="{{ route('user.index') }}">Cancel</a>
            </div>
        </form>
        <script type="text/javascript"></script>
    </div>
@endsection

</html>
