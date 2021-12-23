@extends('layouts.dashboard')

@section('content')

    <div class="mx-auto mt-10 w-2/3">
        @include('blocs.profile_posts', $posts)
    </div>
    

@endsection