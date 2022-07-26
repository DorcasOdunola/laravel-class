@extends('layouts/app')

@section('content')
    <div class="row">
        <div class="col-5 mx-auto shadow mb-5">
            <h1 class="display-4 text-center mb-3">Edit TODO</h1>
            <form action="/todo/edit/{{ $todo->todo_id }}" method="post">
                @csrf
                <input type="text" class="form-control mb-3" placeholder="Todo title" name="todo_title" value="{{ $todo->todo_title }}">
                <input type="text" class="form-control mb-3" placeholder="Todo Details" name="todo_details" value="{{ $todo->todo_details }}">
                <button class="btn btn-success w-100 mb-5">Save</button>
            </form>
        </div>
    </div>
    
@endsection