<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourcesModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_title',
        'description',
        'duration',
        'price',
        'join_students',
        'certified_students',
        'image',
        'status'
    ];
}
