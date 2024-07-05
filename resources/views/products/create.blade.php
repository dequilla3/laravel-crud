<!DOCTYPE html>
<html lang="en">
@extends('layout.layout')
@section('content')
    <div class="shadow-lg p-10 w-1/4 m-auto mt-10">
        <div class="font-semibold text-lg">CREATE PRODUCT</div>
        <form method="post" action="{{ route('product.store') }}" class="pt-5">
            @csrf
            @method('post')
            <div class="mb-3">
                <div class="text-sm">Product Name</div>
                <input required id="name" name="name" type="text" value="{{ old('name') }}"
                    class="border focus:outline-none px-3 py-2 w-full text-sm focus:ring-1 focus:ring-sky-300 shadow-sm rounded"
                    placeholder="e.g. Apple">
                @error('name')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="text-sm">Quantity</div>
                <input required name="qty" type="text" value="{{ old('qty') }}"
                    class="border focus:outline-none px-3 py-2 w-full text-sm focus:ring-1 focus:ring-sky-300 shadow-sm rounded"
                    placeholder="Qty">
                @error('qty')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="text-sm">Price</div>
                <input required name="price" type="text" value="{{ old('price') }}"
                    class="border focus:outline-none px-3 py-2 w-full text-sm focus:ring-1 focus:ring-sky-300 shadow-sm rounded"
                    placeholder="0.00">
                @error('price')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <div class="text-sm">Description</div>
                <input name="description" type="text" value="{{ old('description') }}"
                    class="border focus:outline-none px-3 py-2 w-full text-sm focus:ring-1 focus:ring-sky-300 shadow-sm rounded"
                    placeholder="Write here . . .">
                @error('description')
                    <div class="text-red-500 text-xs">{{ $message }}</div>
                @enderror
            </div>
            <div class="flex space-x-1">
                <input id="submit" type="submit" value="Save"
                    class="bg-sky-500 px-4 py-2 rounded w-full text-neutral-50 cursor-pointer hover:shadow-lg hover:bg-sky-400">
                <a class="bg-red-500 px-4 py-2 rounded w-full text-neutral-50 cursor-pointer hover:shadow-lg hover:bg-red-400 text-center"
                    href="{{ route('product.index') }}">Cancel</a>
            </div>
        </form>
    </div>
@endsection

</html>
