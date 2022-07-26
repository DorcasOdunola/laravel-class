@extends('layouts/app')

@section('content')
    <div class="row">
        <div class="col-5 mx-auto shadow mb-5">
            <h1 class="display-4 text-center mb-3">ADD TODO</h1>
            <a href={{route('todo.index')}}>Back</a>
            <form action="/todo/create" method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" class="form-control mb-3" placeholder="Todo title" name="todo_title">
                <input type="text" class="form-control mb-3" placeholder="Todo Details" name="todo_details">
                <input type="file" class="form-control mb-3" name="image">
                <button class="btn btn-success w-100 mb-5">Submit</button>
            </form>

          

            @if ($errors->any())
                @foreach ( $errors->all() as $error)
                    <p class="text-danger text-center">{{ $error }}</p>
                @endforeach
            
    
            @endif
        </div>
    </div>
    
@endsection