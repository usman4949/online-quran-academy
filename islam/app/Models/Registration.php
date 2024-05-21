<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'fathername',
        'email',
        'gender',
        'birth',
        'phone_number',
        'whatsapp',
        'skype',
        'address',
        'classes_per_week',
        'contact_time',
        'teacher_gender',
        'country',
        'state',
        'language',
        'courses',
        'referred',
        'image',
    ];
}
