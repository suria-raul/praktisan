<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function employee(): HasOne
    {
        return $this->hasOne(Employee::class);
    }
}