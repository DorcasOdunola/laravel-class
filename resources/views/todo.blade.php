@extends('layouts/app')


@section('content')
<div class="row">
    <div class="col-6 mx-auto shadow p-5">
       <h1 class="display-4 text-center"> ALL TODOS </h1>
        <a href="/todo/create">
            <button class="btn btn-light shadow-sm btn-link mb-3">Add Todo</button>
        </a>
        @foreach ($todos as $todo)
        <div class="card shadow-sm mb-3">
            <div class="row">
                <div class="col-8 p-4">
                    <h5>{{ $todo->todo_title }}</h5>
                    <p>{{ $todo->todo_details }}</p>
                    @if ($todo->image_path)
                        <img src="{{ asset('images').'/'.$todo->image_path}}" alt="" class="w-25">
                    @else
                        <img src="{{ asset('images/CCA.png')}}" alt="" class="w-25">
                    @endif
                    </div>
                    <div class="col-4 p-2">
                        {{-- <a href="/todo/edit/{{ $todo->todo_id }}"><button class="btn btn-outline-success btn-sm">Edit</button></a> --}}
                        <a href={{route("todo.edit", [$todo->todo_id])}}><button class="btn btn-outline-success btn-sm">Edit</button></a>
                        <form action="/todo/{{ $todo->todo_id }}" method="get">
                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

   </div>
@endsection
    
