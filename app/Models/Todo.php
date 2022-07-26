<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $table = "todo";

    protected $primaryKey = "todo_id";

    protected $fillable = ['todo_title', 'todo_details', 'image_path'];

    // protected $timestamps = false;


}
