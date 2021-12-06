@extends('layouts.guest')

@section('auth-con')
    

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="mt-8 w-64 flex flex-col" method="POST" action="{{ route('login') }}">
            @csrf

            <input name="email" autofocus
            class="text-xs w-full mb-2 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
            id="email" placeholder="Phone number, username, or email" type="text">
     <input name="password" autofocus
            class="text-xs w-full mb-4 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
            id="password" placeholder="Password" type="password">
     <input type="submit" value="Log In" class="mb-4 text-sm text-center bg-blue-500 text-white py-1 rounded font-medium"></input>
        </form>

@if (Route::has('password.request'))
<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
    {{ __('Forgot your password?') }}
</a>
@endif

@endsection