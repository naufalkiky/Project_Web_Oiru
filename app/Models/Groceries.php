<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groceries extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'package_name',
        'bage_points',
        'image_groceries',
        'description'
    ];

    public function groceries_transactions()
    {
        return $this->hasMany(GroceriesTransaction::class);
    }
}
