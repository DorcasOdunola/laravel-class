@extends('layouts/app')

@section('content')

    <h1 class="display-1 text-center">Landing Page</h1>
    {{-- <p>{{ $title }}</p> --}}
    {{-- <p>{{ $sub_title }}</p> --}}


    {{-- @for($i = 0; $i<$names; $i++)
        <p>{{ $i }}</p>

    @endfor --}}

    @foreach ($names as $name)
        <p>{{ $name }}</p>  
    @endforeach
    
@endsection