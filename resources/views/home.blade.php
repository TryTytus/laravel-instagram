@extends('layouts.dashboard')

@section('content')

    <div class="bg-gray-100 grid justify-center">
        @foreach ($posts as $post)
            @include('blocs.post', ['post'=>$post])
        @endforeach
    </div>


@endsection
