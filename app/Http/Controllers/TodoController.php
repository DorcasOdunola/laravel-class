<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index () {
        $todos = Todo::all();
        return view ('todo', [
            "todos" => $todos
        ]);
    }
    
    public function create () {
        return view ("createtodo");
    }

    public function store (Request $request) {
        // dd($request);
        // return $request->all();

        // $todo = new Todo;
        // $todo->todo_title = $request->input('todo_title');
        // $todo->todo_details = $request->input('todo_details');
        // $todo->save();
        // getSize();
        // guessExtenstion();
        // getClientMimeType();
        // getError();
        // isInvalid()

        $image = $request->file("image")->getClientOriginalName();
        $newName= time()."-".$image;
        $request->image->move(public_path("images"), $newName);


        $request->validate([
            'todo_title' => 'required|min:0|max:20',
            'todo_details' => 'required',
            'image_path' =>'mimes:jpg,png,jpeg|max:5040'
        ]);

        Todo::create([
            'todo_title' => $request->input('todo_title'),
            'todo_details' => $request->input('todo_details'),
            'image_path' => $newName
        ]);

        return redirect("/todo");

    }

    public function edit ($id) {
        $todo = Todo::find($id);

        return view("edittodo", [
            'todo' => $todo
        ]);
    }

    public function update (Request $request, $id) {
        Todo::where('todo_id', $id)
        ->update([
            'todo_title' => $request->input('todo_title'),
            'todo_details' => $request->input('todo_details'),
        ]);
        return redirect("/todo");
    }

    public function destroy ($id) {
        $todo = Todo::find($id);

        $todo->delete();
        return redirect("/todo");

    }
}
