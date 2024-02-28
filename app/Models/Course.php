<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// app/Models/Course.php

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name',
        'description',
        'banner_adress',
        'students_count',
    ];
}
