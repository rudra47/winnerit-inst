<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = [
        'course_id', 'batch_number', 'weekly', 'course_price', 'total_month', 'status'
    ];
    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
}
