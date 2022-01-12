<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Garbage extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'garbage_weight',
        'address',
        'image_garbage',
        'note',
        'status'
    ];

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('d F Y');
    }
}
