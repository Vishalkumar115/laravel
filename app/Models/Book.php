<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books'; // Specify the table name

    protected $fillable = [
        'name',
        'price',
        'quantity',
        'image',
        'Std'
    ];
}
