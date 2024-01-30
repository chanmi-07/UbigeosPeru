<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name', 'province_code'];

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_code', 'code');
    }
}
