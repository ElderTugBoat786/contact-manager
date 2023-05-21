<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'title',
        'company',
        'job_title',
        'home_address',
        'business_address',
        'phone_number',
        'work_number',
        'email',
        'date_of_birth',
        'note',
    ];
}
