<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'StudentID';

    protected $fillable = [
        'FirstName',
        'LastName',
        'Email',
        'PhoneNumber',
    ];
}

