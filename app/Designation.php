<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    protected $fillable = [
        'name'
    ];
    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
}
