<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'Title','Author', 'Pages', 'Year',
    ];

    public function genre(){
        return $this ->belongsTo(Genre::class);
    }
}


