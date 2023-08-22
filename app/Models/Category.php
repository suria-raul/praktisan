<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'ca';

    public function comments()
    {
        return $this->belongsToMany(Comment::class, 'z_a', 'a_id', 'z_id')
            ->withTimestamps();
    }
}
