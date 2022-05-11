<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'Title','Author', 'Pages', 'Year', 'Image',
    ];

    // public function genre(){
    //     return $this->hasMany(Comment::class);
    // }
}


