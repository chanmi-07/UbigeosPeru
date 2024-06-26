<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['code', 'name', 'is_capital', 'province_code'];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }
}
