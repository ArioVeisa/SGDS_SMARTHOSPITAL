<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Relasi dengan Author (misalnya tabel users untuk author)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id'); // Asumsikan 'author_id' adalah foreign key di tabel articles
    }

    // Relasi dengan Category
    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
