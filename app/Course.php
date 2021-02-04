<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'name', 'description', 'image', 'status'
    ];
    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
}
