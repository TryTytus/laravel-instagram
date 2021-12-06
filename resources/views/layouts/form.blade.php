@extends('layouts.dashboard')

@section('content')

<div class="mt-16 flex flex-col justify-center items-center">
    <div class="bg-white border border-gray-300 max-w-md p-14 flex items-center flex-col mb-3">
        <h1 class="bg-no-repeat instagram-logo"></h1>
        @yield('form')
</div>

@endsection