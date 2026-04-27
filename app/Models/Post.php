<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Use HasFactory;
    public function author()
    {
        return $this->belongsTo(Author::class, 'author_id');
    }
}
