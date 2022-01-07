<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groceries extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'bage_points',
        'image_groceries',
        'description'
    ];
}