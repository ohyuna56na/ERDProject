<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $primaryKey = 'CourseID';

    protected $fillable = [
        'CourseName',
        'CourseDescription',
    ];

    public function assignments()
    {
        return $this->hasMany(Assignment::class, 'CourseID');
    }
}
