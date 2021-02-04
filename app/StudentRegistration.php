<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRegistration extends Model
{
    protected $fillable = [
        'student_id', 'name', 'father_name', 'mother_name', 'mobile_number', 'date_of_birth', 'batch_id', 'course_id', 'gender', 'staff_id', 'qualification', 'payment_getway_id', 'paid_amount', 'due_amount', 'total_amount', 'payment_status', 'valid'
    ];
    public function scopeValid($query)
    {
        return $query->where('valid', 1);
    }
}
