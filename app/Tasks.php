<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
    public static $rules = [
        'title' => 'required|min:3|max:40'
    ];
    protected $primaryKey = 'id';
    protected $fillable = ['title'];
}
