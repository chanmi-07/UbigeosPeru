<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['code', 'name', 'is_capital'];

    public function provinces()
    {
        return $this->hasMany(Province::class, 'code');
    }
}
