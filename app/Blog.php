<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['name', 'picture', 'author', 'title', 'content', 'description',
        'quote', 'status', 'type', 'slug'];

    public function category(){

    }

    public function tags(){

    }
}
