
@extends('layouts.guest')

@section('auth-con')
    

      <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="mt-8 w-64 flex flex-col" method="POST" action="{{ route('register') }}">
            @csrf
            <input name="name" autofocus
            class="text-xs w-full mb-2 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
            id="name" placeholder="Full Name" type="text">
            <input name="email" autofocus
            class="text-xs w-full mb-2 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
            id="email" placeholder="Email" type="text">
            <input name="nickname" autofocus
            class="text-xs w-full mb-2 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
            id="nickname" placeholder="Nickname" type="text">
     <input name="password" autofocus
            class="text-xs w-full mb-2 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
            id="password" placeholder="Password" type="password">
            <input name="password_confirmation" autofocus
            class="text-xs w-full mb-2 rounded border bg-gray-100 border-gray-300 px-2 py-2 focus:outline-none focus:border-gray-400 active:outline-none"
            id="password_confirmation" placeholder="Confirm password" type="password">
            
     <input type="submit" value="Register" class="mb-4 text-sm text-center bg-blue-500 text-white py-1 rounded font-medium"></input>
        </form>

@endsection

