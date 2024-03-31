<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = ['code', 'name', 'is_capital', 'department_code'];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_code', 'code');
    }

    public function district()
    {
        return $this->hasMany(District::class, 'code');
    }
}
