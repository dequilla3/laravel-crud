<!DOCTYPE html>
<html lang="en">
@extends('layout.layout')
@section('content')
    <div>
        @if (session('message'))
            <x-msg-box />
        @endif

        <div class="m-auto w-1/2 p-10 mt-24 shadow-lg">
            <div class="flex justify-between mb-5">
                <div class="text-lg font-semibold">USERS</div>
                <a class="border px-4 py-2 text-sm rounded bg-sky-500 text-neutral-50 hover:bg-sky-400"
                    href="{{ route('user.create') }}">Create new User</a>
            </div>
            <div>
                <table class="w-full">
                    <tr>
                        @php
                            $thClasses = 'font-semibold text-sm py-2 text-left bg-sky-100 p-5 py-3 mb-2';
                            $tdClasses = 'border-b-2 text-xs py-3 px-5';
                        @endphp
                        <th class="{{ $thClasses }}">Name</th>
                        <th class="{{ $thClasses }}">Email</th>
                        <th class="{{ $thClasses }}">Date Created</th>
                        <th class="{{ $thClasses }}">Actions</th>
                    </tr>
                    @foreach ($users as $user)
                        <tr class="hover:bg-sky-50 cursor-pointer">
                            <td class="{{ $tdClasses }}">{{ $user->name }}</td>
                            <td class="{{ $tdClasses }}">{{ $user->email }}</td>
                            <td class="{{ $tdClasses }}">{{ $user->created_at }}</td>
                            <td class="{{ $tdClasses }}">
                                <a class="px-4 py-1 text-xs rounded-sm text-neutral-50 mr-1 bg-slate-500 hover:bg-slate-600"
                                    {{-- TODO --}} {{-- href="{{ route('user.edit', ['user' => $user]) }}" --}}>Edit</a>
                                <a onclick="confirmSweetAlert(event)"
                                    class="px-4 py-1 text-xs rounded-sm text-neutral-50 bg-red-400 hover:bg-red-500"
                                    {{-- TODO --}} {{-- href="{{ route('user.delete', ['user' => $user]) }}" --}}>Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function confirmSweetAlert(e) {
        e.preventDefault();
        let href = e.currentTarget.getAttribute('href');
        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = href;
            }
        });
    }
</script>

</html>
