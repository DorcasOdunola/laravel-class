<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
   public function index () {
    $title = 'Laravel';
    $sub_title = "This is laravel class";

    $names = [
        'first' => 'Dorcas',
        'age' => '12',
        'gender' => 'female'
    ];
    // Compact method
    // return view ('index', compact('title', 'sub_title'));

    // with method
    // return view ('index')->with('title', $title);
    // return view ('index')->with('sub_title', $sub_title);

    // direct method
    return view ('index', [
        'names' => $names
    ]);


   }
}
