<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Define the table associated with the model
    protected $table = 'students';

    // Define the fillable properties to allow mass assignment
    protected $fillable = ['srno', 'student_name', 'father_name', 'mobile'];

    // If you want to disable the timestamps (created_at and updated_at) columns, you can set the following property to false
    // public $timestamps = false;
}
