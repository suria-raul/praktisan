<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'co';

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'z_a', 'z_id', 'a_id')
            ->withTimestamps();
    }
}
