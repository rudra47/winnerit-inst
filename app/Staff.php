<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name', 'email', 'user_name', 'password', 'mobile', 'designation_id', 'address', 'image', 'gender', 'valid'
    ];
    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
}
