<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public static $rules = [
        'title' => 'required|min:3|max:40'
    ];
    protected $primaryKey = 'id';
    protected $fillable = ['title'];
    public function user() {
        return $this->belongsTo('App\User');
    }
}
