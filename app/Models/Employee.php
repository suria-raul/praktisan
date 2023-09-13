<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
      'first_name',
      'last_name',
    ];

    public function role(): HasOne
    {
        return $this->hasOne(Role::class);
    }
}
